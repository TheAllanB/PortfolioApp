// assets/js/main.js
// tiny UI helpers: smooth scroll + reveal on scroll

// smooth scroll for internal links
document.addEventListener('click', function(e){
  const a = e.target.closest('a[href^="#"]');
  if(!a) return;
  const id = a.getAttribute('href');
  if(id === "#" || id === "#0") return;
  const target = document.querySelector(id);
  if(target){
    e.preventDefault();
    target.scrollIntoView({behavior:'smooth', block:'start'});
    history.replaceState(null, '', id);
  }
}, false);

// reveal on scroll with IntersectionObserver
const reveals = document.querySelectorAll('.fade-up');
if('IntersectionObserver' in window && reveals.length){
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting) entry.target.classList.add('in');
    });
  }, {threshold: 0.12});
  reveals.forEach(el => io.observe(el));
} else {
  // fallback: just show them
  reveals.forEach(el=>el.classList.add('in'));
}

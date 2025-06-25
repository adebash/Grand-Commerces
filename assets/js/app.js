const body = document.body;

body.addEventListener('mouseover', () => {
  body.style.backgroundColor = 'var(--bg-primary)';
});

body.addEventListener('mouseout', () => {
  body.style.backgroundColor = 'var(--bg-muted)';
});
let headerFeatureItems = document.querySelectorAll('.header-features-item');
const headerFeature = document.getElementById('header-features-items');
console.log(headerFeatureItems, headerFeature);

headerFeatureItems.forEach(hfi => {
  hfi.addEventListener('mouseover', () => {
    headerFeature.style.backgroundColor = 'red';
  })
  hfi.addEventListener('mouseout', () => {
    headerFeature.style.backgroundColor = 'white';
  })
})
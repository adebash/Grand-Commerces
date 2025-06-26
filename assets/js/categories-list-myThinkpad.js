let headerFeatureItems = document.querySelectorAll('.header-features-item');
const headerFeatures = document.getElementById('header-features');
const headerFeaturesDetailsItems = document.getElementById('header-features-details-items');
console.log(headerFeatureItems, headerFeatures, headerFeaturesDetailsItems);

//CREATE A FUNCTION FOR HEADER FEATURES CONTAINING

function featuresInc(file, element) {
  fetch(file)
  .then(response => response.text())
  .then(data => {
    document.getElementById(element).innerHTML = data;
  })
  .catch(error => console.error('Error loading features:', error));
}

  headerFeatures.addEventListener('mouseover', () => {
    headerFeatures.style.backgroundColor = 'var(--bg-card)';
    headerFeaturesDetailsItems.style.height = '30em';
    featuresInc('includes/allcategories.html', 'headerFeaturesDetailsItems')
    }
  );

  headerFeatures.addEventListener('mouseout', () => {
    headerFeatures.style.backgroundColor = 'var(--bg-main )';
    headerFeaturesDetailsItems.style.height = '0em'
  });

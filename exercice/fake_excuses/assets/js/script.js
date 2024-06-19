console.log('Main Page');
const select_country = document.querySelector('.country');

select_country.addEventListener('change', event => {
    console.log(event.target.value);
});

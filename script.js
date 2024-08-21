function validateForm() {
    const year = document.getElementById('year_of_publication').value;
    if (year < 1000 || year > new Date().getFullYear()) {
        alert('Please enter a valid year of publication.');
        return false;
    }
    return true;
}

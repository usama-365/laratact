// If the select option is changed
let filter = document.getElementById('filter_company_id');
filter.addEventListener("change", function () {
    // Get the value attribute of the current or selected option
    let companyID = this.value || this.options[this.selectedIndex].value;
    // Redirect the URL by passing the company id as GET method
    window.location.href = window.location.href.split("?")[0] + "?company_id=" + companyID;
});

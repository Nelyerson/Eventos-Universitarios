// Get the table element
var table = document.getElementById('list');

// Get the filter text input element
var filterTextInput = document.getElementById('txtFiltro');

// Get the filter identifier
var filterIdentifier = filterTextInput.options[filterTextInput.selectedIndex].value;

// Add an event listener to the filter text input element
filterTextInput.addEventListener('input', function() {
  // Get the filter text
  var filterText = filterTextInput.value;

  // Filter the table rows
  var tableRows = table.getElementsByTagName('tr');
  for (var i = 0; i < tableRows.length; i++) {
    var tableRow = tableRows[i];

    // Get the student name from the table row
    var studentName = tableRow.cells[2].textContent;

    // Hide the table row if it does not match the filter text
    if (studentName.toLowerCase().indexOf(filterText.toLowerCase()) === -1) {
      tableRow.style.display = 'none';
    } else {
      tableRow.style.display = '';
    }
  }
});

// Crear un formulario con un campo de texto y un menú desplegable
const filterForm = document.querySelector('#filter-form');
const filterTextInput = filterForm.querySelector('input[name="filter-text"]');
const filterAttributeSelect = filterForm.querySelector('select[name="filter-attribute"]');

// Agregar un botón al formulario
const filterButton = filterForm.querySelector('button');

// Crear una función JavaScript para filtrar las filas de la tabla
function filterTableRows() {
  // Obtener el texto introducido por el usuario
  const filterText = filterTextInput.value;

  // Obtener el atributo seleccionado por el usuario
  const filterAttribute = filterAttributeSelect.options[filterAttributeSelect.selectedIndex].value;

  // Filtrar las filas de la tabla
  const tableRows = document.querySelectorAll('tbody tr');
  tableRows.forEach(function(tableRow) {
    // Obtener el valor del atributo seleccionado de la fila de la tabla
    const attributeValue = tableRow.querySelector('td:nth-child(' + filterAttribute + ')').textContent;

    // Ocultar la fila de la tabla si no cumple con los criterios de búsqueda
    tableRow.style.display = 'none';
    if (attributeValue.toLowerCase().includes(filterText.toLowerCase())) {
      tableRow.style.display = '';
    }
  });
}

// Agregar la función JavaScript al evento submit del formulario
filterForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Filtrar las filas de la tabla
  filterTableRows();
});

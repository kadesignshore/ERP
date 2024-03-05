

  // Your Javascript code to create the grid
  const myGridElement = document.querySelector('#myGrid');
  agGrid.createGrid(myGridElement, gridOptions);
  // Grid Options: Contains all of the grid configurations
const gridOptions = {
  // Row Data: The data to be displayed.
  rowData: [
    { make: "Tesla", model: "Model Y", price: 64950, electric: true },
    { make: "Ford", model: "F-Series", price: 33850, electric: false },
    { make: "Toyota", model: "Corolla", price: 29600, electric: false },
  ],
  // Column Definitions: Defines the columns to be displayed.
  columnDefs: [
    { field: "make" },
    { field: "model" },
    { field: "price" },
    { field: "electric" }
  ]
};
// Create Grid: Create new grid within the #myGrid div, using the Grid Options object
gridApi = agGrid.createGrid(document.querySelector('#myGrid'), gridOptions);
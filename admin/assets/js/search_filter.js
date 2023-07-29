const searchInput = document.getElementById('searchInput');
    const columnSelect = document.getElementById('columnSelect');
    const tableRows = document.querySelectorAll('.table-row');

    searchInput.addEventListener('input', filterTable);
    columnSelect.addEventListener('change', filterTable);

    function filterTable() {
      const searchQuery = searchInput.value.toLowerCase();
      const selectedColumn = columnSelect.value;

      tableRows.forEach(function(row) {
        const column = row.querySelector(`.${selectedColumn}`);
        const columnText = column.textContent.toLowerCase();
        const shouldShow = columnText.includes(searchQuery);
        row.style.display = shouldShow ? 'flex' : 'none';
      });
    }
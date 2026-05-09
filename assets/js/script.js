function addRow() {

    const tableBody = document.querySelector("#my-table tbody");

    const rowCount = tableBody.rows.length + 1;

    const newRow = document.createElement("tr");

    newRow.innerHTML = `
    <td><input type="text" name="sl_no[]" value="${rowCount}"></td>
        <td>
            <input type="text" list="particularslist" name="particulars">
        </td>

        <td><input type="text" name="quantity" onchange="calc(${rowCount-1})"></td>

        <td><input type="text" name="rate" onchange="calc(${rowCount-1})"></td>

        <td><input type="text"name="gst"id="gst"</td>
        
        <td><input type="text" name="amount"></td>
    `;
    tableBody.appendChild(newRow);
}

function deleteRow() {

    const tableBody = document.querySelector("#my-table tbody");

    const rows = tableBody.querySelectorAll("tr");

    if (rows.length > 1) {
        tableBody.removeChild(tableBody.lastElementChild);
    } else {
        alert("At least one row is required for the purchase.");
    }
}

function calc(e) {
    const quantities = document.getElementsByName('quantity');
    const quantity = quantities[e].value

    const rates = document.getElementsByName('rate');
    const rate = rates[e].value;

    const gsts = document.getElementsByName('gst');
    const gst = gsts[e].value;

    const amt = quantity * rate;
    document.getElementsByName("amount")[e].value = amt;

}
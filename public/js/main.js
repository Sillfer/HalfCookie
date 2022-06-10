function getCatProducts($id) {
    const input = document.querySelector('#cat_id');
    const form = document.querySelector('#catPro');
    input.value = $id;
    form.submit();
}

function submitForm($id) {
    const input = document.querySelector('#product_id');
    const form = document.querySelector('#form');
    input.value = $id;
    form.submit();
}

function deleteForm($id) {
    const input = document.querySelector('#delete_product_id');
    const form = document.querySelector('#delete_Form');
    input.value = $id;
    form.submit();
}

function deleteCat($id) {
    const input = document.querySelector('#delete_cat_id');
    const form = document.querySelector('#delete_cat_Form');
    input.value = $id;
    form.submit();
}
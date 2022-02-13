$(document).ready(function () {
  $('#save').click(function () {
    var category = $("input[name='category']").val();
    var parent_id = $("select[name='parent_id']").val();

    console.log(parent_id);

    $.ajax({
      url: '/ci/category/save',
      type: 'POST',
      data: { category: category, parent_id: parent_id },
      error: function (err) {
        console.error(err);
        alert('Something is wrong');
      },
      success: function (data) {
        console.log(data);
        window.location = '/ci/category';
      },
    });
  });

  $('#select').click(function () {
    var id = $("select[name='id']").val();

    $.ajax({
      url: `/ci/category/select?parent_id=${id}`,
      type: 'GET',
      error: function (err) {
        console.error(err);
        alert('Something is wrong');
      },
      success: function (data) {
        console.log(data);
        $("select[name='id']").removeAttr('name');

        var sel = $(`
        <div class="col-lg-8">
         <strong>Selector:</strong>
          <select class="form-control" name="id">
          </select>
        </div>
        `).insertBefore('#row #select-container');

        $(JSON.parse(data)).each(function () {
          $("select[name='id']").append(
            $('<option>').attr('value', this.id).text(this.category)
          );
        });

        // window.location = '/ci/category';
      },
    });
  });
});

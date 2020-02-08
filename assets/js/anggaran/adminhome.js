$(document).ready(function () {
   
    
    /**
	Add Item
	 */
    var row = 1;
    $('.add-item').on('click', function () {
        row += 1;
        var html = "<tr> "+
                        "<th scope='row'> "+row+"</th>"+
                        "<td> <input type='text' class='form-control'> </td>"+
                        "<td>"+
                            "<select name='' id='' class='from-control'>"+
                                "<option value='Tunai'>Tunai</option>"+
                                "<option value='Transfer'>Transfer</option>"+
                            "</select> "+
                        "</td>"+
                        "<td> <input type='number' class='form-control'> </td>"+
                        "<td> "+
                            "<a href='javascript:void(0)' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></a>"+
                            "<a href='javascript:void(0)' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></a>"+
                        " </td>"+
                    "</tr>";
        $('#mytable').find('tbody').append(html);
    });

});
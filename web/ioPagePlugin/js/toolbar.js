$(document).ready(function(){

  // hook up the publish, unpublish icons
  $('#io_page_toolbar .publish_container a').click(function() {
    var action = $(this).attr('title');
    if (!confirm('Are you sure you want to '+action+'?'))
    {
      return false;
    }

    $.ajax({
      url:  $(this).attr('href'),
      type:  'post',
      dataType: 'json',
      success: function(data, textStatus, XMLHttpRequest) {
        location.reload();
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert('Could not '+action);
      }
    });

    return false;
  });

  // hook up the delete page
  $('#io_page_toolbar .delete_container a').click(function() {
    var action = $(this).attr('title');
    if (!confirm('Are you sure you want to '+action+'?'))
    {
      return false;
    }

    $.ajax({
      url:  $(this).attr('href'),
      type:  'post',
      dataType: 'json',
      data:  { 'sf_method': 'delete' },
      success: function(data, textStatus, XMLHttpRequest) {
        window.location = data.redirect;
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert('Could not '+action);
      }
    });

    return false;
  });

  // hook up the edit form button
  $('#io_page_toolbar .form_container a.edit_button').click(function() {
    // if button is "Close" close the toolbox
    if ($(this).html() == 'Close')
    {
      io_form_toolbar_remove_form();

      return false;
    }

    $(this).html('Close');
    $.ajax({
      url:  $(this).attr('href'),
      success: function(data, textStatus, XMLHttpRequest) {
        //$('#io_page_toolbar').css('height', '200px');

        $('#io_page_toolbar .toolbox_expanded').html(data);
        $('#io_page_toolbar .toolbox_expanded').show();
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert('Error loading form.');
      }
    });

    return false;
  });

});

/**
 * Called to close the form and replace the toolbar to its original state
 */
function io_form_toolbar_remove_form()
{
  $('#io_page_toolbar .toolbox_expanded').hide();
  $('#io_page_toolbar .form_container a.edit_button').html('Edit');
}
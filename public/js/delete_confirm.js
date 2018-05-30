
$('form.delete-question').submit(function(e) {
       var deleteConfirmed = confirm('Are you sure you want to delete this question?');
       return deleteConfirmed;
});
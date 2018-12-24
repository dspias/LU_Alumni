// Slide Toggle
$(document).ready(function() {
    $("a.comment").click(function() {
        $(".post-comment").slideToggle();
        return false
    });
});

// ===============< Input File Part >=============
$(document).ready(function(){
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;
    
        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();
    
            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });
});

$(document).ready(function(){
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;
    
        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();
    
            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });
});

// ============< Edit Change >===========
$(function(){
    $("#editBtn").click(function(){
        $('#viewPost').addClass('d-none');
        $('#editPost').removeClass('d-none');
        $('#editBtn').attr('disabled', 'disabled');    
    });
    $("#cancelBtn").click(function(){
        $('#editPost').addClass('d-none');
        $('#viewPost').removeClass('d-none');
        $('#editBtn').removeAttr('disabled', 'disabled');
    });
});
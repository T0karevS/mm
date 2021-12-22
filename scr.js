$('.form1').submit(function(e){
    e.preventDefault();
    let th=$(this);
    let btn = th.find('.btn');
    
    $.ajax({
        url: '/kod.php',
        method: 'post',
        dataType: 'html',
        data: th.serialize(),
        success: function(data){
            function a(className)
        {
            return Number(document.getElementsByClassName(className).value);            
        }
        document.querySelector(".info").innerHTML = data;
        
        }
        
    })
    });
    
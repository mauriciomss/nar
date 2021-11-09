function changeTitle(count) {
    var title = document.title;

    var porciones = title.split(') ');
    if (porciones[1]) {
        var title = porciones[1];
    }
    var newTitle = '(' + count + ') ' + title;
    document.title = newTitle;
}


$(document).ready(function(){

    //Notificaciones Popups
    var timer = 5000;
    function cronPopups() {
        $.ajax({
            type: "POST",
            url: "index.php?ctrl=Notificaciones&accion=Popups",
            data: "Popups=Ver",
            dataType : 'json',                       
            success: function(data) {
                if (data) {
					$(document).Toasts('create', {
						body: '<a href="'+data.link_id+data.referencia_id+'">'+data.mensaje+'</a>',
						title: data.usuario,
						image: data.foto
					});
                    //
                    NotifyMe("Notificaciones",data.mensaje,data.link_id+data.referencia_id);
                    //
					if (data.faltan > 0) {
						timer = 2000
					} else {
						timer = 15000
					}
                } else {
                	timer = 15000
                }
                //console.log(timer);
            }
        });
    }
    //
    setInterval(function() {
        cronPopups();
    }, timer); // Lanzará la petición cada N segundos


    // *******************************************************************
    //Notificaciones Listado 
    var timer2 = 15000;
    function cronLista() {
        $.ajax({
            type: "POST",
            url: "index.php?ctrl=Notificaciones&accion=Lista",
            data: "Lista=Ver",
            dataType : 'json',                       
            success: function(data) {
                var notificaciones = 0;
                var tareas = 0;
                var contenido = '';
                $('#menu-tareas-count').html("");

                if (data.length > 0) {
                    $.each(data, function(index, d){
                        //notificaciones = notificaciones + Number(d.cant);
                        notificaciones++;
                        contenido = contenido +
                        '<div class="dropdown-divider"></div>'+
                        '<a href="'+d.link_id+d.referencia_id+'" class="dropdown-item">'+
                        '    <i class="fas '+d.icon+' mr-2"></i> '+d.mensaje+
                        //'    <span class="float-right text-muted text-sm">3 mins</span>'+
                        '</a>';
                        if (d.nombre == 'Tareas') {
                            tareas++;
                            $('#menu-tareas-count').html(tareas);
                        }
                    });

                    $('.notifications-menu').show();
                    $('.notifications-menu a span').html(notificaciones);
                    $('.notifications-menu .dropdown-menu').html('');
                    $('.notifications-menu .dropdown-menu').append('<span class="dropdown-item dropdown-header">'+notificaciones+' Notificaciones</span>');
                    $('.notifications-menu .dropdown-menu').append( contenido );

                    changeTitle(notificaciones);
                } else {
                    $('.notifications-menu').hide();                
                }
            }
        });
    }
    //
    cronLista();
    //
    setInterval(function() {
        cronLista();
    }, timer2); // Lanzará la petición cada N segundos



    // *******************************************************************
    //Comentarios
    var timer3 = 15000;
    function cronComentarios() {
        $.ajax({
            type: "POST",
            url: "index.php?ctrl=Notificaciones&accion=Comentarios",
            data: "Comentarios=Ver",
            dataType : 'json',                       
            success: function(data) {
                var notificaciones = 0;
                var contenido = '';

                if (data.length > 0) {
                    $.each(data, function(index, d){
                        notificaciones++;
                        var tiempo = "";

                        if (d.dias == 0 && d.horas == 0)
                            tiempo = d.minutos + 'min atras';
                        
                        if (d.dias == 0 && d.minutos > 59)
                            tiempo = d.horas + 'hs atras';

                        if (d.horas > 23 && d.minutos > 59)
                            tiempo = d.dias + ' días atras';

                        contenido = contenido +
                        '<a href="'+d.link_id+d.referencia_id+'" class="dropdown-item">'+
                        '    <div class="media">'+
                        '        <img src="'+d.foto+'" alt="User Avatar" class="img-size-50 mr-3 img-circle">'+
                        '        <div class="media-body">'+
                        '            <h3 class="dropdown-item-title">'+d.usuario+'</h3>'+
                        '            <p class="text-sm">'+d.mensaje+'</p>'+
                        '            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>'+tiempo+'</p>'+
                        '        </div>'+
                        '    </div>'+
                        '</a>'+
                        '<div class="dropdown-divider"></div>';
                    });

                	$('.notifications-comentarios').show();
                	$('.notifications-comentarios a span').html(notificaciones);
                	$('.notifications-comentarios .dropdown-menu').html('');
                	$('.notifications-comentarios .dropdown-menu').append( contenido );

                } else {
					$('.notifications-comentarios').hide();            	
                }
            }
        });
    }
    //
    cronComentarios();
    //
    setInterval(function() {
        cronComentarios();
    }, timer3); // Lanzará la petición cada N segundos



    // *******************************************************************
    //Usuarios Online
    var timer4 = 60000;
    function cronUsuarios() {
        $.ajax({
            type: "POST",
            url: "index.php?ctrl=Notificaciones&accion=Usuarios",
            data: "Usuarios=Ver",
            dataType : 'json',                       
            success: function(data) {
                var usuarios = 0;
                var contenido = '';

                if (data.length > 0) {

                    $.each(data, function(index, d){
                        usuarios++;

                        contenido = contenido +
                        '<span class="dropdown-item">'+
                        '    <div class="media">'+
                        '        <img src="'+d.foto+'" alt="Avatar" class="img-size-50 mr-3 img-circle">'+
                        '        <div class="media-body">'+
                        '            <h3 class="dropdown-item-title">'+d.usuario+'</h3>'+
                        '            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> activo hace '+d.minutos+'min</p>'+
                        '        </div>'+
                        '    </div>'+
                        '</span>'+
                        '<div class="dropdown-divider"></div>';
                    });

                    $('.notifications-usuarios').show();
                    $('.notifications-usuarios a span').html(usuarios);
                    $('.notifications-usuarios .dropdown-menu').html('');
                    $('.notifications-usuarios .dropdown-menu').append( contenido );
                } else {
                    $('.notifications-usuarios').hide();             
                }
            }
        });
    }
    //
    cronUsuarios();
    //
    setInterval(function() {
        cronUsuarios();
    }, timer4); // Lanzará la petición cada N segundos


});


var contadorAfk = 0;
$(document).ready(function () {
    //Cada minuto se lanza la función ctrlTiempo
    var contadorAfk = setInterval(function(){ctrlTiempo();}, 60000); 

    //Si el usuario mueve el ratón cambiamos la variable a 0.
    $(this).mousemove(function (e) {
        contadorAfk = 0;
        //console.log('ctrlTiempo mousemove: '+contadorAfk);
    });
    //Si el usuario presiona alguna tecla cambiamos la variable a 0.
    $(this).keypress(function (e) {
        contadorAfk = 0;
        //console.log('ctrlTiempo keypress: '+contadorAfk);
    });

});
function ctrlTiempo() {
    //Se aumenta en 1 la variable.
    contadorAfk++;
    //console.log('ctrlTiempo contadorAfk: '+contadorAfk);
    //Se comprueba si ha pasado del tiempo que designemos.
    if (contadorAfk > 20) { // Más de N# minutos, lo detectamos como ausente o inactivo.
        window.location.href = "/Login/LockScreen";
    }
}


function PermissionNotifyMe()  
{  
    if  (!("Notification"  in  window))  {   
        alert("Este navegador no soporta notificaciones de escritorio");  
    } 
    else  if  (Notification.permission  !==  'denied')  {
        Notification.requestPermission(function (permission)  {
            if  (!('permission'  in  Notification))  {
                Notification.permission  =  permission;
            }
            if  (permission  ===  "granted")  {
                var  options  =   {
                    body:   "Perfecto, ahora vera las notificaciones de escritorio",
                    icon:   "img/notification.png",
                };     
                var  notification  =  new  Notification("Hola :)", options);
            }   
        });  
    }
}

function NotifyMe(titulo, contenido, url)  
{  
    if  (Notification.permission  ===  "granted")  {
        var  options  =   {
            body:   contenido.replace('<br>','\n'),
            icon:   "img/notification.png",
        };
        var  notification  =  new  Notification(titulo, options);
        notification.onclick = function() {
            window.location.href = url;
        }        
    }
}
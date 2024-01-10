<?php
global $dbPath;
include __DIR__."/../../".$dbPath."config/dashboard.php";
// main
$string["homeNavbar"] = "Inicio";
$string["welcome"] = "¡Bienvenido a ".$gdps.'!';
$string["didntInstall"] = "<div style='color:#47a0ff'><b>¡Cuidado, no has terminado de instalar el panel!</b> Haz clic en el texto para hacerlo.</div>";
$string["levelsWeek"] = "Niveles subidos en una semana"; // nejik: "en" is more properly, although it's an unused string lol
$string["levels3Months"] = "Niveles subidos en 3 meses"; // nejik: same as previous
$string["footer"] = $gdps.", ".date('Y', time());
$string["tipsAfterInstalling"] = "¡Bienvenido al panel! Aquí van unos consejos tras la instalación:<br>
1. Parece que aparecieron nuevos permisos en SQL en la tabla 'roles'. Ve a comprobarlo...<br>
2. Coloca un archivo 'icon.png' en la carpeta 'dashboard' para que aparezca el logo de tu GDPS en la esquina superior izquierda.<br>
3. Configura el panel en 'config/dashboard.php'";
$string["wwygdt"] = "¿Qué vas a hacer hoy?";
$string["game"] = "Juego";
$string["guest"] = "invitado";
$string["account"] = "Cuenta";
$string["levelsOptDesc"] = "Ver lista de niveles";
$string["songsOptDesc"] = "Ver lista de canciones";
$string["yourClanOptDesc"] = "Ver clan \"%s\"";
$string["clanOptDesc"] = "Ver lista de clanes";
$string["yourProfile"] = "Tu perfil";
$string["profileOptDesc"] = "Ver tu perfil";
$string["messengerOptDesc"] ="Ver tus mensajes";
$string["addSongOptDesc"] = "Agregar una canción al servidor";
$string["loginOptDesc"] = "Iniciar sesión";
$string["createAcc"] = "Crear cuenta";
$string["registerOptDesc"] = "Regístrate en %s";
$string["downloadOptDesc"] = "Descargar %s";
// cron
$string["tryCron"] = "Ejecutar Cron";
$string["cronSuccess"] = "¡Completado con éxito!";
$string["cronError"] = "Error";
// acc settings
$string["profile"] = "Perfil";
$string["empty"] = "Vacío...";
$string["writeSomething"] = "¡Escribe algo!";  
$string["replies"] = "Respuestas";
$string["replyToComment"] = "Responder al comentario";
$string["settings"] = "Ajustes";
$string["allowMessagesFrom"] = "Permitir mensajes de...";
$string["allowFriendReqsFrom"] = "Permitir solicitudes de amistad de...";
$string["showCommentHistory"] = "Mostrar historial de comentarios para...";
$string["yourYouTube"] = "Tu canal de YouTube";
$string["yourVK"] = "Tu página en VK";
$string["yourTwitter"] = "Tu perfil de Twitter";
$string["yourTwitch"] = "Tu canal de Twitch";
$string["saveSettings"] = "Guardar ajustes";
$string["all"] = "Todos";
$string["friends"] = "Amigos";
$string["none"] = "Nadie";
$string["youBlocked"] = "Este jugador te ha bloqueado";  // jg here: it's better to say <<"person" te ha bloqueado>>
$string["cantMessage"] = "No puedes enviar mensajes a este jugador";
// acc management
$string["accountManagement"] = "Gestión de tu cuenta";
$string["changePassword"] = "Cambiar contraseña";
$string["changeUsername"] = "Cambiar nombre de usuario";
$string["unlistedLevels"] = "Tus niveles ocultos";
// manage
$string["manageSongs"] = "Administrar canciones";
$string["gauntletManage"] = "Administrar Gauntlets";
$string["suggestLevels"] = "Niveles sugeridos";
// mod tools
$string["modTools"] = "Herramientas de moderador";
$string["leaderboardBan"] = "Banear usuario";
$string["unlistedMod"] = "Niveles ocultos";
// reupload
$string["reuploadSection"] = "Servidor"; // jg here: ???  i'll need a bit more of context for this one lol // nejik: navBar thing, it's better set it to "Servidor" since there's also Cron tool there
$string["songAdd"] = "Subir canción";
$string["songLink"] = "Subir canción con un enlace"; // nejik: or change "con un" with "mediante" idk
$string["packManage"] = "Administrar Map Packs";
// browse
$string["browse"] = "Navegación";  // jg here: i think i've corrected an error here, but i may need context to assure it // nejik: no but looks better!
$string["statsSection"] = "Estadísticas";
$string["dailyTable"] = "Niveles diarios";
$string["modActionsList"] = "Acciones de los moderadores";
$string["modActions"] = "Moderadores";
$string["gauntletTable"] = "Gauntlets";
$string["packTable"] = "Map Packs";
$string["leaderboardTime"] = "Top del día";
// download
$string["download"] = "Descargar";
$string["forwindows"] = "Para Windows";
$string["forandroid"] = "Para Android";
$string["formac"] = "Para Mac OS";
$string["forios"] = "Para iOS";
$string["third-party"] = "Recursos externos"; // nejik: "Créditos" also works but I'm not sure
$string["thanks"] = "¡Gracias a estas personas!";
$string["language"] = "Idioma";
// profile
$string["loginHeader"] = "¡Hola, %s!";
$string["logout"] = "Cerrar sesión";
$string["login"] = "Iniciar sesión";
$string["wrongNickOrPass"] = "¡Usuario o contraseña incorrectos!";
$string["invalidid"] = "¡ID inválida!";
$string["loginBox"] = "Iniciar en la cuenta";
$string["loginSuccess"] = "¡Has iniciado sesión exitosamente!"; // nejik: oops "exitosamente" doesn't have accent according to RAE
$string["loginAlready"] = "Ya has iniciado sesión";
$string["clickHere"] = "Panel";
$string["enterUsername"] = "Introducir nombre de usuario";
$string["enterPassword"] = "Introducir contraseña";
$string["loginDesc"] = "Aquí puedes iniciar sesión en tu cuenta";
// register
$string["register"] = "Registrarse";
$string["registerAcc"] = "Registro de cuenta";
$string["registerDesc"] = "¡Registra tu cuenta!";
$string["repeatpassword"] = "Repetir contraseña";
$string["email"] = "Email";
$string["repeatemail"] = "Repetir email";
$string["smallNick"] = "¡El nombre de usuario es demasiado corto!";
$string["smallPass"] = "¡La contraseña es demasiado corta!";
$string["passDontMatch"] = "Las contraseñas no coinciden";
$string["emailDontMatch"] = "Los emails no coinciden";
$string["registered"] = "¡Te has registrado exitosamente!"; // nejik: I think the old one is more properly since it's the same format as 'login' (line 98)
// change password
$string["changePassTitle"] = "Cambiar contraseña";
$string["changedPass"] = "Has cambiado tu contraseña, inicia sesión nuevamente";
$string["wrongPass"] = "Contraseña incorrecta";
$string["samePass"] = "Las contraseñas introducidas son iguales";
$string["changePassDesc"] = "Aquí puedes cambiar tu contraseña";
$string["oldPassword"] = "Contraseña actual";
$string["newPassword"] = "Nueva contraseña"; // nejik: I like the old one :c
$string["confirmNew"] = "Confirmar nueva contraseña";
// change username/password (admin)
$string["forcePassword"] = "Forzar cambio de contraseña";
$string["forcePasswordDesc"] = "Aquí puedes forzar el cambio de contraseña de un jugador";
$string["forceNick"] = "Forzar cambio de nombre de usuario";
$string["forceNickDesc"] = "Aquí puedes forzar el cambio de nombre de un jugador";
$string["forceChangedPass"] = "¡La contraseña de <b>%s</b> se ha cambiado con éxito!";
$string["forceChangedNick"] = "¡El nombre de usuario de <b>%s</b> se ha cambiado con éxito!";
$string["changePassOrNick"] = "Cambiar usuario/contraseña de un jugador";
// change username
$string["changeNickTitle"] = "Cambiar nombre de usuario";
$string["changedNick"] = "Has cambiado tu nombre de usuario, inicia sesión nuevamente.";
$string["wrongNick"] = "Nombre de usuario incorrecto";
$string["sameNick"] = "Los nombres introducidos son iguales";
$string["alreadyUsedNick"] = "¡El nombre de usuario ya está en uso!";
$string["changeNickDesc"] = "Aquí puedes cambiar tu nombre de usuario";
$string["oldNick"] = "Nombre de usuario actual";
$string["newNick"] = "Nuevo nombre de usuario";
$string["password"] = "Contraseña";
// map packs
$string["packCreate"] = "Añadir";
$string["packCreateTitle"] = "Crear Map Pack";
$string["packCreateDesc"] = "¡Aquí puedes crear un Map Pack!";
$string["packCreateSuccess"] = "Creaste con éxito un Map Pack llamado";
$string["packCreateOneMore"] = "Crear otro Map Pack";
$string["packName"] = "Nombre del Map Pack";
$string["color"] = "Color";
$string["sameLevels"] = "¡Has escogido los mismos niveles!";
$string["show"] = "Mostrar";
$string["packChange"] = "Cambiar Map Pack";
$string["createNewPack"] = "¡Crea un nuevo Map Pack!"; // Translate word "create" like its call to action
// gauntlets
$string["gauntletCreate"] = "Añadir";
$string["gauntletCreateTitle"] = "Crear Gauntlet";
$string["gauntletCreateDesc"] = "¡Aquí puedes crear un Gauntlet!";
$string["gauntletCreateSuccess"] = "¡Has creado un Gauntlet exitosamente!";
$string["gauntletCreateOneMore"] = "Crear otro Gauntlet";
$string["chooseLevels"] = "¡Elige los niveles!";
$string["checkbox"] = "Confirmar";
$string["level1"] = "Nivel 1";
$string["level2"] = "Nivel 2";
$string["level3"] = "Nivel 3";
$string["level4"] = "Nivel 4";
$string["level5"] = "Nivel 5";
$string["gauntletChange"] = "Cambiar Gauntlet";
$string["createNewGauntlet"] = "¡Crea un nuevo Gauntlet!"; // Translate word "create" like its call to action
$string["gauntletCreateSuccessNew"] = '¡Has creado con éxito el Gauntlet <b>%1$s</b>!';
$string["gauntletSelectAutomatic"] = "Elegir Gauntlet automáticamente";
// quests
$string["addQuest"] = "Crear misión";
$string["addQuestDesc"] = "¡Aquí puedes crear una misión!";
$string["questName"] = "Nombre de la misión";
$string["questAmount"] = "Cantidad requerida";
$string["questReward"] = "Recompensa";
$string["questCreate"] = "Añadir";
$string["questsSuccess"] = "¡Has creado una misión con éxito!";
$string["invalidPost"] = "¡Datos incorrectos!";
$string["fewMoreQuests"] = "Es recomendable crear más misiones.";
$string["oneMoreQuest?"] = "Crear otra misión";
$string["changeQuest"] = "Cambiar misión";
$string["createNewQuest"] = "¡Crea una nueva misión!"; // like gauntlets and mappacks above
// reupload
$string["levelReupload"] = "Resubir nivel";
$string["levelReuploadDesc"] = "Aquí puedes resubir tu nivel de cualquier servidor";
$string["advanced"] = "Opciones avanzadas";
$string["errorConnection"] = "Error de conexión";
$string["levelNotFound"] = "¡El nivel no existe!";
$string["robtopLol"] = "RobTop no te quiere :c";
$string["sameServers"] = "El servidor host y el servidor destino son iguales";
$string["levelReuploaded"] = "¡Nivel resubido! ID del nivel:";
$string["oneMoreLevel?"] = "Resubir otro nivel";
$string["levelAlreadyReuploaded"] = "¡El nivel ya fue resubido!";
$string["server"] = "Servidor";
$string["levelID"] = "ID del nivel";
$string["pageDisabled"] = "Esta sección está deshabilitada";
// acc activation
$string["activateAccount"] = "Activación de cuenta";
$string["activateDesc"] = "Aquí puedes activar tu cuenta";
$string["activated"] = "¡Tu cuenta ha sido activada exitosamente!";
$string["alreadyActivated"] = "Tu cuenta ya ha sido activada";
$string["maybeActivate"] = "Talvez no has activado tu cuenta aún.";
$string["activate"] = "Activar";
$string["activateDisabled"] = "La activación de cuenta está deshabilitada";
// mod
$string["addMod"] = "Agregar moderador";
$string["addModDesc"] = "¡Aquí puedes agregar un nuevo moderador al servidor!";
$string["modYourself"] = "No puedes darte moderador";
$string["alreadyMod"] = "¡Este jugador ya es moderador!";
$string["addedMod"] = "Has otorgado moderador al jugador exitosamente";
$string["addModOneMore"] = "Añadir otro moderador";
$string["modAboveYourRole"] = "¡No puedes otorgar un rol superior al tuyo!";
$string["makeNewMod"] = "¡Otorga moderador a alguien!";
$string["reassignMod"] = "Reasignar Moderador";
$string["reassign"] = "Reasignar";
$string['demotePlayer'] = "Demotear jugador";
$string['demotedPlayer'] = "¡Has demoteado al jugador <b>%s</b> exitosamente!";
$string['addedModNew'] = "¡Has otorgado Moderador al jugador <b>%s</b> exitosamente!";
$string['demoted'] = 'Demoteado';
// creator points
$string["shareCPTitle"] = "Compartir puntos de creador";
$string["shareCPDesc"] = "¡Aquí puedes compartir Puntos de Creador (PC) con un jugador!";
$string["shareCP"] = "Compartir";
$string["alreadyShared"] = "Este nivel ya le compartió PC al jugador";
$string["shareToAuthor"] = "No puedes compartirle PC al creador";
$string["userIsBanned"] = "¡Este jugador está baneado!";
$string["shareCPSuccess"] = "Has compartido PC de un nivel exitosamente";
$string["shareCPSuccess2"] = "al jugador";
$string["updateCron"] = "Talvez debas actualizar los PC.";
$string["shareCPOneMore"] = "Compartir más PC";
$string['shareCPSuccessNew'] = '¡Has compartido PC del nivel <b>%1$s</b> al jugador <b>%2$s</b> exitosamente!';
// messenger
$string["messenger"] = "Mensajería";
$string["write"] = "Escribir";
$string["send"] = "Enviar";
$string["noMsgs"] = "¡Comienza un chat!";
$string["subject"] = "Asunto";
$string["msg"] = "Mensaje";
$string["tooFast"] = "¡Estás escribiendo muy rápido!";
// reupload to server
$string["levelToGD"] = "Transferir nivel a otro servidor";
$string["levelToGDDesc"] = "Aquí puedes resubir tu nivel a un servidor externo";
$string["usernameTarget"] = "Nombre de usuario para el servidor destino";
$string["passwordTarget"] = "Contraseña para el servidor destino";
$string["notYourLevel"] = "¡Este no es tu nivel!";
$string["reuploadFailed"] = "¡Error al resubir el nivel!";
// searching status
$string["search"] = "Buscar";
$string["searchCancel"] = "Borrar filtros";
$string["emptySearch"] = "¡Sin resultados!";
// demonlist
$string["demonlist"] = 'Demonlist';
$string["demonlistRecord"] = 'Récords de <b>%s</b>';
$string["alreadyApproved"] = 'Ya ha sido aprobado';
$string["alreadyDenied"] = 'Ya ha sido rechazado';
$string["approveSuccess"] = '¡Has aprobado el récord de <b>%s</b> exitosamente!';
$string["denySuccess"] = '¡Has rechazado el récord de <b>%s</b> exitosamente!';
$string["recordParameters"] = '<b>%s</b> ha completado <b>%s</b> en <b>%d</b> intentos';
$string["approve"] = 'Aprobar';
$string["deny"] = 'Rechazar';
$string["submitRecord"] = 'Publicar récord';
$string["submitRecordForLevel"] = 'Publicar récord por <b>%s</b>';
$string["alreadySubmitted"] = 'Ya has publicado un récord por <b>%s</b>';
$string["submitSuccess"] = '¡Has publicado un récord por <b>%s</b> exitosamente!';
$string["submitRecordDesc"] = '¡Publica un récord SOLO si has completado el nivel!';
$string["atts"] = 'Intentos';
$string["ytlink"] = 'ID del video de YouTube (dQw4w9WgXcQ)';
$string["submit"] = 'Publicar';
$string["addDemonTitle"] = 'Agregar demon';
$string["addDemon"] = 'Agregar demon a la Demonlist';
$string["addedDemon"] = '¡Has agregado <b>%s</b> en la posición <b>%d</b>!';
$string["addDemonDesc"] = '¡Aquí puedes añadir un demon a la Demonlist!';
$string["place"] = 'Posición';
$string["giveablePoints"] = 'Puntos';
$string["add"] = 'Aceptar';
$string["recordApproved"] = '¡Récord aprobado!';
$string["recordDenied"] = '¡Récord rechazado!';
$string["recordSubmitted"] = '¡Récord publicado!';
$string["nooneBeat"] = '0 jugadores lo han completado'; //let it be lowercase
$string["oneBeat"] = '1 jugador lo ha completado'; 
$string["lower5Beat"] = '%d jugadores lo han completado'; // russian syntax, sorry
$string["above5Beat"] = '%d jugadores lo han completado'; 
$string["demonlistLevel"] = '%s <text class="dltext">por <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="font-size:25px" class="accbtn" name="accountID" value="%d">%s</button></text>';
$string["noDemons"] = 'Parece que la Demonlist está vacía...';
$string["addSomeDemons"] = '¡Agrega demons para llenar la Demonlist!';
$string["askForDemons"] = 'Pídele al dueño que agregue demons';
$string["recordList"] = 'Lista de récords';
$string["status"] = 'Estado';
$string["checkRecord"] = 'Comprobar récord';
$string["record"] = 'Récord';
$string["recordDeleted"] = '¡El récord ha sido eliminado!';
$string["changeDemon"] = 'Cambiar demon';
$string["demonDeleted"] = '¡El demon ha sido eliminado!';
$string["changedDemon"] = 'Has movido <b>%s</b> a la posición <b>%d</b>';
$string["changeDemonDesc"] = '¡Aquí puedes cambiar de posición un demon!<br>
Si quieres eliminar un demon, coloca la posición en 0.';
// email verification
$string["didntActivatedEmail"] = '¡No has activado tu cuenta a través de email!';
$string["checkMail"] = 'Deberías revisar tu email...';
// fav songs
$string["likeSong"] = "Añadir a favoritos";
$string["dislikeSong"] = "Quitar de favoritos";
$string["favouriteSongs"] = "Canciones favoritas";
$string["howMuchLiked"] = "¿A cuántos les ha gustado?"; // nejik: unused string
$string["nooneLiked"] = "A nadie le ha gustado"; // same as previous
// clans
$string["clan"] = "Clan";
$string["joinedAt"] = "Se unió al clan: <b>%s</b>";
$string["createdAt"] = "Creó el clan: <b>%s</b>";
$string["clanMembers"] = "Miembros del clan";
$string["noMembers"] = "Sin miembros";
$string["clanOwner"] = "Dueño del clan";
$string["noClanDesc"] = "<i>Sin descripción</i>";
$string["noClan"] = "¡Este clan no existe!";
$string["clanName"] = "Nombre del clan";
$string["clanDesc"] = "Descripción del clan";
$string["clanColor"] = "Color del clan";
$string["dangerZone"] = "Zona de peligro";
$string["giveClan"] = "Transferir propiedad";
$string["deleteClan"] = "Eliminar clan";
$string["goBack"] = "Volver";
$string["areYouSure"] = "¿Estás seguro?";
$string["giveClanDesc"] = "Aquí puedes transferirle el clan a un jugador";
$string["notInYourClan"] = "Este jugador no está en tu clan";
$string["givedClan"] = "¡Has transferido tu clan a <b>%s</b> exitosamente!";
$string["deletedClan"] = "Has eliminado el clan <b>%s</b>.";
$string["deleteClanDesc"] = "Aquí puedes eliminar el clan";
$string["yourClan"] = "Tu clan";
$string["members0"] = "<b>1</b> miembro";
$string["members1"] = "<b>%d</b> miembros"; 
$string["members2"] = "<b>%d</b> miembros"; 
$string["noRequests"] = "Sin solicitudes aún";
$string["pendingRequests"] = "Solicitudes del clan";
$string["closedClan"] = "Clan privado";
$string["kickMember"] = "Expulsar miembro";
$string["leaveFromClan"] = "Abandonar clan";
$string["askToJoin"] = "Enviar solicitud de unión";
$string["removeClanRequest"] = "Rechazar solicitud de unión";
$string["joinClan"] = "Unirse al clan";
$string["noClans"] = "Aún no hay clanes";
$string["clans"] = "Clanes";
$string["alreadyInClan"] = "Ya estás en un clan";
$string["createClan"] = "Crear clan";
$string["createdClan"] = "¡Has creado un clan exitosamente <span style='font-weight:700;color:#%s'>%s</span>!";
$string["createClanDesc"] = "Aquí puedes crear un clan";
$string["create"] = "Crear";
$string["mainSettings"] = "Ajustes principales";
$string["takenClanName"] = "¡El nombre de clan ya está en uso!";
// idk
$string["suggestedName"] = '<button type="button" onclick="a(\'profile/%1$s\', true, true)" class="accbtn" name="accountID">%1$s</button><text class="dltext"> ha sugerido <b>%4$s%3$s</b> para</text><text class="levelname">%2$s</text>'; // %1$s - Mod username, %2$s - level name, %3$s - x stars, %4$s - Featured/Epic (%4$s%3$s - Featured, x stars)
$string["reportedName"] = '%1$s<text class="dltext"> ha reportado</text><text class="levelname">%2$s</text>';
// lists
$string['listTable'] = "Listas";
$string['listTableMod'] = "Listas ocultas";
$string['listTableYour'] = "Tus listas ocultas";
// REUPLOAD
$string["reuploadBTN"] = "Subir";
$string["errorGeneric"] = "¡Ha ocurrido un error!";
$string["smthWentWrong"] = "Algo salió mal";
$string["tryAgainBTN"] = "Volver a intentar";
//songAdd.php
$string["songAddDesc"] = "Aquí puedes subir una canción al servidor";
$string["songAddUrlFieldLabel"] = "URL de la canción: (solo enlaces de Dropbox o directos)";
$string["songAddUrlFieldPlaceholder"] = "URL de la canción";
$string["songAddNameFieldPlaceholder"] = "Nombre de la canción";
$string["songAddAuthorFieldPlaceholder"] = "Autor";
$string["songAddButton"] = "Elegir canción";
$string["songAddAnotherBTN"] = "Subir otra canción";
$string["songAdded"] = "¡Canción agregada!";
$string["deletedSong"] = "Has eliminado la canción exitosamente";
$string["renamedSong"] = "Has renombrado la canción como";
$string["songID"] = "ID de la canción: ";
$string["songIDw"] = "ID de la canción";
$string["songAuthor"] = "Autor";
$string["size"] = "Tamaño";
$string["delete"] = "Eliminar";
$string["change"] = "Cambiar";
$string["chooseFile"] = "Elige una canción";
$string['yourNewSong'] = "¡Echa un vistazo a tu nueva canción!";
// errors
$string["songAddError-2"] = "URL inválida";
$string["songAddError-3"] = "Esta canción ya fue subida con la ID:";
$string["songAddError-4"] = "Esta canción no se puede subir";
$string["songAddError-5"] = "El tamaño de la canción excede los $songSize megabytes";
$string["songAddError-6"] = "Algo salió mal al subir la canción :с";
$string["songAddError-7"] = "¡Solo puedes subir audios!";
// error messages
$string[400] = "¡Solicitud incorrecta!";
$string["400!"] = "Verifique los controladores de su hardware de red.";
$string[403] = "¡Prohibido!";
$string["403!"] = "No tienes acceso a esta página";
$string[404] = "¡Página no encontrada!";
$string["404!"] = "¿Seguro que escribiste la URL correctamente?";
$string[500] = "¡Error interno del servidor!";
$string["500!"] = "El programador cometió un error en el código,</br>
por favor reporta este problema aquí:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "¡Servidores caídos!";
$string["502!"] = "La carga en el servidor es demasiado grande.</br>
¡Vuelve más tarde dentro de varias horas!";
// captcha
$string["invalidCaptcha"] = "¡Respuesta captcha inválida!";
$string["page"] = "Página";
$string["emptyPage"] = "Esta página está vacía";
// STATS
$string["ID"] = "ID";
$string["orbs"] = "Orbes";
$string["stars"] = "Estrellas";
$string["coins"] = "Monedas";
$string["accounts"] = "Cuentas";
$string["levels"] = "Niveles";
$string["songs"] = "Canciones";
$string["author"] = "Creador";
$string["name"] = "Nombre";
$string["date"] = "Fecha";
$string["type"] = "Tipo";
$string["reportCount"] = "Número de reportes";
$string["reportMod"] = "Reportes";
$string["username"] = "Nombre de usuario";
$string["accountID"] = "ID de la cuenta";
$string["registerDate"] = "Fecha de registro";
$string["levelAuthor"] = "Autor del nivel";
$string["isAdmin"] = "Rol en el servidor";
$string["isAdminYes"] = "Si";
$string["isAdminNo"] = "No";
$string["userCoins"] = "Monedas de usuario";
$string["time"] = "Tiempo";
$string["deletedLevel"] = "Nivel eliminado";
$string["mod"] = "Moderador";
$string["count"] = "Cantidad de acciones";
$string["ratedLevels"] = "Niveles rateados";
$string["lastSeen"] = "Última vez en línea";
$string["level"] = "Nivel";
$string["pageInfo"] = "Página %s de %s";
$string["first"] = "Primer";
$string["previous"] = "Anterior";
$string["next"] = "Siguiente";
$string["never"] = "Nunca";
$string["last"] = "Último";
$string["go"] = "Vamos";
$string["levelid"] = "ID del nivel";
$string["levelname"] = "Nombre del nivel";
$string["leveldesc"] = "Descripción del nivel";
$string["noDesc"] = "Sin descripción";
$string["levelpass"] = "Contraseña";
$string["nopass"] = "Sin contraseña";
$string["unrated"] = "Sin rate";
$string["rate"] = "Rate";
$string["stats"] = "Estadísticas";
$string["suggestFeatured"] = "¿Featured?";
$string["whoAdded"] = "¿Quién lo otorgó?";
//modActionsList
$string["banDesc"] = "¡Aquí puedes expulsar a un jugador de las calificaciones!";
$string["playerTop"] = 'Top de jugadores';
$string["creatorTop"] = 'Top de creadores';
// mod badges
$string["admin"] = "Administrador";
$string["elder"] = "Elder moderador";
$string["moder"] = "Moderador";
$string["player"] = "Jugador";
// variables
$string["starsLevel2"] = "estrellas";
$string["starsLevel1"] = "estrellas";
$string["starsLevel0"] = "estrella";
$string["coins2"] = "monedas";
$string["coins1"] = "monedas";
$string["coins0"] = "moneda";
$string["time0"] = "vez";
$string["time1"] = "veces";
$string["times"] = "veces";
$string["action0"] = "acción";
$string["action1"] = "acciones";
$string["action2"] = "acciones";
$string["lvl0"] = "nivel";
$string["lvl1"] = "niveles";
$string["lvl2"] = "niveles";
$string["player0"] = "jugador";
$string["player1"] = "jugadores";
$string["player2"] = "jugadores";
$string["unban"] = "Desbaneado";
$string["isBan"] = "Baneado";
// nothing
$string["noCoins"] = "Sin monedas";
$string["noReason"] = "Sin razón";
$string["noActions"] = "Sin acciones";
$string["noRates"] = "Sin rates";
// future?
$string["future"] = "Futuro";
// ban & mod actions
$string["spoiler"] = "Spoiler";
$string["accid"] = "con la ID de cuenta";
$string["banned"] = "fue baneado exitósamente";
$string["unbanned"] = "fue desbaneado exitósamente";
$string["ban"] = "Banear";
$string["nothingFound"] = "¡Este jugador no existe!";
$string["banUserID"] = "Nombre o ID del jugador";
$string["banUserPlace"] = "Banear un usuario";
$string["banYourself"] = "No puedes banearte"; 
$string["banYourSelfBtn!"] = "Banea a alguien más";
$string["banReason"] = "Razón del ban";
$string["action"] = "Acción";
$string["value"] = "1er valor";
$string["value2"] = "2do valor";
$string["value3"] = "3er valor";
$string["modAction1"] = "Nivel rateado";
$string["modAction2"] = "Featured de un nivel";
$string["modAction3"] = "Verificación de monedas";
$string["modAction4"] = "Epic";
$string["modAction5"] = "Daily";
$string["modAction6"] = "Nivel eliminado";
$string["modAction7"] = "Creador cambiado";
$string["modAction8"] = "Nivel renombrado";
$string["modAction9"] = "Contraseña cambiada";
$string["modAction10"] = "Demon cambiado";
$string["modAction11"] = "Puntos de creador compartidos";
$string["modAction12"] = "Nivel ocultado";
$string["modAction13"] = "Descripción de Nivel cambiada";
$string["modAction14"] = "LDM";
$string["modAction15"] = "Ban del top";
$string["modAction16"] = "ID de canción cambiada";
$string["modAction17"] = "Map Pack creado";
$string["modAction18"] = "Gauntlet creado";
$string["modAction19"] = "Canción cambiada";
$string["modAction20"] = "Rol de jugador actualizado";
$string["modAction21"] = "Map Pack cambiado";
$string["modAction22"] = "Gauntlet cambiado";
$string["modAction23"] = "Misión cambiada";
$string["modAction24"] = "Rol de jugador reasignado";
$string["modAction25"] = "Misión creada";
$string["modAction26"] = "Usuario/contraseña de jugador cambiada";
$string["modAction30"] = "Lista rateada";
$string["modAction31"] = "Lista enviada";
$string["modAction32"] = "Featured de una lista";
$string["modAction33"] = "Lista ocultada";
$string["modAction34"] = "Lista eliminada";
$string["modAction35"] = "Creador de lista cambiado";
$string["modAction36"] = "Nombre de lista cambiado";
$string["modAction37"] = " Descripción de lista cambiada";
$string["everyActions"] = "Cualquier acción";
$string["everyMod"] = "Todos los moderadores";
$string["Kish!"] = "¡Vete!";
$string["noPermission"] = "¡No tienes permiso!";
$string["noLogin?"] = "No has iniciado sesión en tu cuenta";
$string["LoginBtn"] = "Inicia sesión en tu cuenta";
$string["dashboard"] = "Volver al panel";
$string["userID"] = 'ID del usuario';
// errors
$string["errorNoAccWithPerm"] = "Error: No se han encontrado cuentas con el permiso '%s'";

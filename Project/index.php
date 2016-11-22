<?php 
	header("Content-type:text/html;charset=utf-8");
	include("php/dbPDO.class.php"); 
	include("php/dbRecords.class.php");
	dbPDO::init();
	dbPDO::setCharSet();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>beFriend</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Social -->
	<meta name="twitter:card" content="summary"/>  <!-- Тип окна -->
	<meta name="twitter:site" content="beFriend"/>
	<meta name="twitter:title" content="beFriend">
	<meta name="twitter:description" content="Наше приложение позволит Вам сблизиться со всеми вашими знакомыми и заводить настоящих друзей. Мы поможем Вам узнать знакомых намного лучше, а также обнаружить у них Ваши общие интересы. Все это сделает из Вас внимательного, привлекательного в общении человека."/>
	<meta name="twitter:creator" content="OneWayUp"/>
	<meta name="twitter:image:src" content="http://befriend.owuteam.com/img/friends.jpeg"/>
	<meta name="twitter:domain" content="befriend.owuteam.com"/>

	<meta name="title" content="beFriend" />
	<meta name="description" content="Наше приложение позволит Вам сблизиться со всеми вашими знакомыми и заводить настоящих друзей. Мы поможем Вам узнать знакомых намного лучше, а также обнаружить у них Ваши общие интересы. Все это сделает из Вас внимательного, привлекательного в общении человека." />
	<link rel="image_src" href="http://befriend.owuteam.com/img/friends.jpeg" />

	<meta property="og:type" content="website" />
	<meta property="og:title" content="beFriend" />
	<meta property="og:description" content="Наше приложение позволит Вам сблизиться со всеми вашими знакомыми и заводить настоящих друзей. Мы поможем Вам узнать знакомых намного лучше, а также обнаружить у них Ваши общие интересы. Все это сделает из Вас внимательного, привлекательного в общении человека." />
	<meta property="og:url" content="http://befriend.owuteam.com" />
	<meta property="og:image" content="http://befriend.owuteam.com/img/friends.jpeg" />
	<!-- /Social -->

	<!-- Template Basic Images Start -->
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<!-- Template Basic Images End -->	

	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Custom Browsers Color Start -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#597da3">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#597da3">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#597da3">
	<!-- Custom Browsers Color End -->
</head>

<body id="body">

<!--
	<div class="beta-firstScreen hidden">
		<div class="container">
			<div class="beta-info">
				<h3 class="beta-info__header">
					Добро пожаловать на тестирование нового приложения!
				</h3>
				<div class="beta-info__content">
					<p>
						Данное приложение находится на стадии открытого beta-тестирования. Настоящая версия может содержать ошибки различного характера. Наша цель - найти как можно больше недочетов и сделать приложение как можно удобнее, привлекательнее и стабильнее. И если Вы читаете это сообщение, то это означает, что мы просим Вашей помощи в тестировании.
					</p>
					<p>
						Начните использовать приложение прямо сейчас, и если Вы заметите недочет по дизайну, производительности, или ошибку в работе... все, что угодно, чтобы Вы хотели исправить - сообщите об этом нам. Вы можете это сделать посредством выбора одной из ошибок, представленных из списка, расположенного под основным блоком викторины, а также, можете сами написать нам замеченную погрешность и нажать кнопку отправить.
					</p>
					<p>
						Давайте работать вместе и создавать качественные продукты! Мы будем Вам очень благодарны!
					</p> 
				</div>
				<div class="beta-info__buttons">
					<a href="#" class="openButton">
						Открыть
					</a>
				</div>
			</div>
		</div>
	</div>
-->

	<div style='height: 0; width: 0; position: absolute; visibility: hidden'>
		<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg"><symbol id="alarm" viewBox="0 0 57.157 57.157"><circle cx="28.578" cy="29.157" r="26" fill="#e0e1e2"/><circle cx="28.578" cy="29.157" r="15" fill="#fff"/><path d="M12.578 57.157a.999.999 0 0 1-.707-1.707l3.933-3.933a.999.999 0 1 1 1.414 1.414l-3.933 3.933a.997.997 0 0 1-.707.293zM44.578 57.157a.997.997 0 0 1-.707-.293l-3.963-3.963a.999.999 0 1 1 1.414-1.414l3.963 3.963a.999.999 0 0 1-.707 1.707z" fill="#424a60"/><path d="M46.672 11.371a.999.999 0 0 1-.707-1.707l3-3a.999.999 0 1 1 1.414 1.414l-3 3a.996.996 0 0 1-.707.293zM10.485 11.371a.997.997 0 0 1-.707-.293l-3-3a.999.999 0 1 1 1.414-1.414l3 3a.999.999 0 0 1-.707 1.707z" fill="#c7cac7"/><path d="M28.578 57.157c-15.439 0-28-12.561-28-28s12.561-28 28-28 28 12.561 28 28-12.56 28-28 28zm0-52c-13.234 0-24 10.767-24 24s10.766 24 24 24 24-10.767 24-24-10.766-24-24-24z" fill="#26b99a"/><g fill="#26b99a"><path d="M28.578 6.036a1 1 0 0 0-1 1v1a1 1 0 1 0 2 0v-1a1 1 0 0 0-1-1zM28.578 49.036a1 1 0 0 0-1 1v1a1 1 0 1 0 2 0v-1a1 1 0 0 0-1-1zM50.578 28.036h-1a1 1 0 1 0 0 2h1a1 1 0 1 0 0-2zM7.578 28.036h-1a1 1 0 1 0 0 2h1a1 1 0 1 0 0-2zM43.427 12.772l-.707.707a.999.999 0 1 0 1.414 1.414l.707-.707a.999.999 0 1 0-1.414-1.414zM13.022 43.178l-.707.707a.999.999 0 1 0 1.414 1.414l.707-.707a.999.999 0 1 0-1.414-1.414zM44.134 43.178a.999.999 0 1 0-1.414 1.414l.707.707a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414l-.707-.707zM13.729 12.772a.999.999 0 1 0-1.414 1.414l.707.707a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414l-.707-.707z"/></g><path d="M39.578 30.157h-8a1 1 0 1 1 0-2h8a1 1 0 1 1 0 2zM28.578 27.157a1 1 0 0 1-1-1v-11a1 1 0 1 1 2 0v11a1 1 0 0 1-1 1z" fill="#424a60"/><path d="M28.578 33.157c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z" fill="#424a60"/><path d="M54.493 2.086a7.121 7.121 0 0 1 0 10.071L44.421 2.086a7.123 7.123 0 0 1 10.072 0zM2.664 2.086a7.121 7.121 0 0 0 0 10.071L12.735 2.086a7.121 7.121 0 0 0-10.071 0z" fill="#e7eced"/></symbol><symbol id="correct" viewBox="0 0 369.946 369.946"><path d="M184.973 0C82.981 0 0 82.975 0 184.973s82.981 184.973 184.973 184.973 184.973-82.975 184.973-184.973S286.965 0 184.973 0zm-34.196 263.873l-66.125-66.125 8.437-8.437 57.688 57.688 125.561-125.561 8.437 8.437-133.998 133.998z" fill="#91DC5A"/></symbol><symbol id="cup" viewBox="0 0 461.241 461.241"><path d="M170.3 193.523c-63.212-24.946-89.854-71.038-101.074-105.311-12.078-36.895-9.286-67.745-9.161-69.04l.871-9.041h74.375v20H79.726c.099 10.976 1.485 30.743 8.742 52.572 14.479 43.552 44.482 74.578 89.174 92.216l-7.342 18.604z" fill="#e5c400"/><path d="M170.3 193.523c-63.212-24.946-89.854-71.038-101.074-105.311-12.078-36.895-9.286-67.745-9.161-69.04l.871-9.041h74.375v20H79.726c.099 10.976 1.485 30.743 8.742 52.572 14.479 43.552 44.482 74.578 89.174 92.216l-7.342 18.604z" opacity=".4" fill="#5b5b5f"/><path fill="#e5c400" d="M213.658 214.612h33.926v85.673h-33.926zM316.344 334.479H144.897v-7.395c0-14.8 11.998-26.798 26.798-26.798h117.851c14.8 0 26.798 11.998 26.798 26.798v7.395z"/><path fill="#d8d9dd" d="M123.228 334.479h214.785v105.905H123.228z"/><path fill="#fff" d="M148.441 359.692h164.358v55.475H148.441z"/><path fill="#59595a" d="M111.805 435.566h237.63v25.675h-237.63z"/><path opacity=".4" fill="#5b5b5f" d="M213.658 214.612h33.926v22.604h-33.926z"/><path d="M401.176 19.173l-.871-9.041h-54.179c.072-3.485.11-6.874.11-10.132H230.62 115.005c0 77.692 19.344 224.599 115.615 224.599 29.033 0 51.06-13.373 67.68-34.167 57.929-25.52 82.942-69.313 93.715-102.22 12.078-36.894 9.286-67.744 9.161-69.039zM373.008 81.99c-10.267 31.362-28.544 56.266-54.516 74.405 17.133-38.413 24.48-86.494 26.832-126.264h36.21c-.085 10.814-1.433 30.192-8.526 51.859z" fill="#e5c400"/><path d="M316.344 334.479H144.897v-7.395c0-14.8 11.998-26.798 26.798-26.798h117.851c14.8 0 26.798 11.998 26.798 26.798v7.395z" opacity=".4" fill="#5b5b5f"/><path d="M401.176 19.173l-.871-9.041h-54.179c.072-3.485.11-6.874.11-10.132H230.62v461.241h118.815v-25.675h-11.423V334.479h-21.669v-7.395c0-14.8-11.998-26.798-26.798-26.798h-41.963v-77.32c20.863-4.153 37.5-15.997 50.717-32.533 57.929-25.52 82.942-69.313 93.715-102.22 12.079-36.895 9.287-67.745 9.162-69.04zM373.008 81.99c-10.267 31.362-28.544 56.266-54.516 74.405 17.133-38.413 24.48-86.494 26.832-126.264h36.21c-.085 10.814-1.433 30.192-8.526 51.859z" opacity=".3" fill="#5b5b5f"/></symbol><symbol id="happy2" viewBox="0 0 466.48 466.48"><path d="M113.774 117.5l.001.006.06-.014c.019-.002.04-.003.059-.006l-.001-.005c20.825-3.8 34.845-23.591 31.404-44.563-3.442-20.97-23.049-35.243-43.996-32.188v-.005c-.02.003-.039.008-.059.012-.019.003-.039.004-.06.008l.001.004c-20.822 3.8-34.843 23.589-31.403 44.559 3.441 20.971 23.051 35.245 43.994 32.192z"/><path d="M256.65 347.108l-75.171-76.18c-5.161-6.179-19.082-93.779-19.679-97.416-1.53-9.323 1.116-15.24 1.116-15.24s37.779-97.063 41.606-107.749c3.829-10.687 3.61-17.676-3.771-22.981-7.389-5.307-19.994-5.465-22.984 3.771l-40.475 97.119s-10.317-3.76-21.712-2.088l-.284.055c-.095.014-.188.023-.286.039-11.329 2.057-19.906 8.917-19.906 8.917L25.719 56.261c-8.189-8-17.678-3.619-22.985 3.771-5.298 7.385-2.274 15.714 3.77 22.981L80.36 171.82s4.395 4.762 5.924 14.084l14.694 89.538 9.753 149.876c.636 9.771 8.76 17.272 18.415 17.272.403 0 .81-.013 1.218-.039 10.18-.663 17.896-9.453 17.233-19.633 0 0-8.792-130.323-8.792-135.115 0-2.942 2.865-4.62 6.243-1.195l85.306 86.449c7.165 7.261 18.861 7.34 26.123.174 7.26-7.167 7.338-18.862.173-26.123zM341.415 153.566l-.002.004c.016.006.029.008.045.013.017.005.028.012.044.017l.002-.003c.133.043.266.077.396.117.13.049.256.104.387.151l-.002.004.046.013c.014.004.027.012.043.017l.001-.003c15.674 5.061 32.572-3.344 37.936-18.989 5.362-15.643-2.826-32.646-18.309-38.263l.001-.003a.419.419 0 0 0-.047-.014l-.043-.017-.001.003c-.133-.042-.265-.077-.396-.117-.13-.049-.255-.103-.388-.151l.004-.003c-.016-.006-.031-.008-.046-.014-.016-.004-.028-.011-.045-.016l-.001.003c-15.673-5.062-32.569 3.343-37.932 18.985s2.823 32.649 18.307 38.266z"/><path d="M466.016 166.096c-1.591-6.898-8.285-9.908-20.375-7.393l-90.73 9.766s-4.235-5.053-15.088-8.772c-10.853-3.72-17.25-2.313-17.25-2.313l-65.658-63.373c-8.004-9.404-15.138-11.134-20.625-6.663-6.604 5.38-7.822 13.889-3.955 18.691 5.83 7.241 64.576 67.462 66.704 70.912 2.128 3.451 1.262 4.883-1.125 11.837-1.013 2.955-16.629 46.469-22.552 62.601l-77.569 52.271c-6.768 4.561-8.557 13.745-3.997 20.513 4.56 6.769 13.744 8.559 20.513 3.997 0 0 81.802-54.971 83.782-56.456 1.98-1.485 4.634-.554 3.739 2.268-.894 2.82-35.104 110.87-35.104 110.87-2.464 7.781 1.847 16.085 9.628 18.549 1.483.471 2.986.693 4.464.693 6.271 0 12.091-4.022 14.085-10.32l38.611-121.946c.163-.515.286-1.034.391-1.554l21.213-61.875c2.384-6.954 2.578-8.618 6.374-10.037s87.134-12.935 96.183-15.077c5.997-1.423 10.255-8.889 8.341-17.189z"/></symbol><symbol id="hugs2" viewBox="0 0 124.915 124.915"><path d="M63.643 31.73l-1.797 1.641-2.37-2.232a13.218 13.218 0 0 1-1.445-.323 36.167 36.167 0 0 0-3.352 1.761 4.255 4.255 0 0 0-.019-1.555c.536-.312 1.064-.6 1.581-.872a13.059 13.059 0 0 1-6.324-6.207 52.43 52.43 0 0 0-2.126 1.359 539.653 539.653 0 0 0-2.716-1.545 13.052 13.052 0 0 1-6.229 6.303c2.245 1.167 7.706 4.193 9.223 5.264.332.232.69.393 1.057.52v22.12c0 1.9.305 3.709.875 5.36a5.852 5.852 0 0 0-.027.533v4.967h.033c-.002.072-.021.14-.021.212l.002 43.685a5.392 5.392 0 1 0 10.783 0l-.001-43.685c0-.073-.019-.14-.021-.212h.81c-.002.072-.021.139-.021.211l-.003 43.686a5.392 5.392 0 0 0 5.391 5.393h.001a5.39 5.39 0 0 0 5.391-5.391l.003-43.686c0-.073-.019-.141-.021-.212h.062l.005-5.644s.953-1.279.953-5.911c0-2.487.253-11.765.253-11.765l.025-10.144c-.057-.028-7.717-4.226-7.717-4.226l-2.238.595z"/><path d="M35.746 31.466l-2.37 1.817-1.797-1.642a821.315 821.315 0 0 0-8.71 4.05 5.052 5.052 0 0 1-2.172.488 5.08 5.08 0 0 1-2.359-.596l-.017.017c-4.541-3.644-8.328-9.951-9.655-12.667A4.562 4.562 0 0 0 .46 26.919c.804 1.657 8.181 16.282 19.31 19.766.641.201 1.285.349 1.929.469.073 2.804.207 8.216.207 10.031 0 4.631.954 5.909.954 5.909l.004 5.646h.083c-.002.073-.021.143-.021.217l.001 43.687a5.392 5.392 0 1 0 10.783-.002l-.001-43.685c0-.074-.019-.144-.022-.217h.812c-.003.073-.022.143-.022.217l-.003 43.685a5.392 5.392 0 1 0 10.783.002V68.957c0-.074-.019-.143-.021-.217h.013v-4.967a6.26 6.26 0 0 0-.026-.534c.57-1.651.875-3.461.875-5.36V35.343c-1.938.156-7.776-4.081-8.493-4.407-.473.137-1.369.449-1.859.53z"/><path d="M20.55 34.73c.607 0 1.225-.131 1.809-.409.06-.028 3.843-1.815 7.454-3.474a13.03 13.03 0 0 1-7.643-5.806 763.498 763.498 0 0 0-3.435 1.613 4.242 4.242 0 0 0-2.024 5.646 4.246 4.246 0 0 0 3.839 2.43z"/><circle cx="61.848" cy="18.55" r="11.751"/><circle cx="33.508" cy="18.55" r="11.751"/><path d="M93.65 30.79c3.648 1.675 7.518 3.503 7.579 3.531a4.238 4.238 0 0 0 5.646-2.022 4.24 4.24 0 0 0-2.021-5.646c-.159-.075-1.692-.8-3.706-1.739a13.03 13.03 0 0 1-7.498 5.876z"/><circle cx="90.188" cy="18.55" r="11.751"/><path d="M122.35 19.903a4.564 4.564 0 0 0-6.099 2.1c-1.461 2.991-5.896 10.324-11.039 13.674a5.063 5.063 0 0 1-2.347.59 5.068 5.068 0 0 1-2.173-.488 784.84 784.84 0 0 0-8.709-4.049l-1.797 1.641-2.37-2.232a13.149 13.149 0 0 1-1.444-.323 36.3 36.3 0 0 0-3.353 1.761A4.233 4.233 0 0 0 83 31.022a40.52 40.52 0 0 1 1.581-.872 13.05 13.05 0 0 1-6.324-6.207 52.43 52.43 0 0 0-2.126 1.359 539.653 539.653 0 0 0-2.716-1.545 13.056 13.056 0 0 1-6.229 6.303c2.244 1.167 7.706 4.193 9.223 5.264.332.232.689.393 1.056.52v22.12c0 1.9.306 3.709.876 5.36a5.852 5.852 0 0 0-.027.533v4.967h.033c-.002.072-.021.14-.021.212l.002 43.685a5.392 5.392 0 1 0 10.783 0l-.004-43.682c0-.073-.019-.141-.021-.212h.811c-.002.071-.021.139-.021.211l-.003 43.687a5.392 5.392 0 0 0 5.391 5.392h.001a5.39 5.39 0 0 0 5.392-5.39l.003-43.687c0-.073-.02-.14-.021-.212h.062l.004-5.645s.953-1.277.953-5.91c0-2.011.164-8.457.228-10.853a16.095 16.095 0 0 0 1.63-.249l.042.018c.005-.01.012-.019.019-.029a16.362 16.362 0 0 0 1.571-.399c11.128-3.484 18.505-18.108 19.31-19.766a4.564 4.564 0 0 0-2.108-6.092z"/></symbol><symbol id="talk2" viewBox="0 0 484.504 484.504"><g><path d="M217.495 182.239c4.311-2.849 8.33-5.529 11.979-7.737 8.688-5.25 11.482-16.554 6.214-25.239-5.238-8.689-16.546-11.461-25.228-6.223-4.053 2.445-8.521 5.403-13.291 8.56-15.428 10.229-38.895 26.148-52.063 22.426-9.625-2.72-10.786-9.35-13.954-14.155-6.818-12.582-21.304-20.933-34.394-20.66 0 0-11.675 0-25.898 5.596-64.09 22.856-64.261 38.019-64.253 45.435.009 6.763.148 13.298 19.12 24.331H.061L0 428.281h160.066l10.625-97.807s-53.075-3.91-79.508-7.738c-31.757-4.598-37.31-33.873-37.31-33.873l-16.527-68.152c9.471 4.613 21.767 9.904 38 16.161a18.36 18.36 0 0 0 6.6 1.232c7.385 0 14.343-4.48 17.161-11.773 3.648-9.479-1.077-20.123-10.55-23.768-9.992-3.85-21.175-8.567-30.436-12.829 1.586-.731 3.328-1.483 5.045-2.242l25.673 10.199c15.497 5.984 19.826 18.521 15.244 30.435-3.421 8.887-13.746 19.954-31.866 12.799-5.595-2.208-10.633-4.17-15.406-6.138l7.973 51.806c2.271 14.746 11.323 22.381 27.008 26.607 7.576 3.164 89.693 9.396 89.693 9.396-2.765 32.17-8.396 84.957-9.074 91.129-1.841 12.832 6.466 25.123 19.312 28.02 1.856.412 3.714.611 5.527.611 11.468 0 21.809-7.922 24.431-19.574 1.103-4.912 10.737-119.828 10.828-120.973.579-6.967-2.082-14.563-6.798-19.717-6.053-6.619-11.479-12.469-75.965-14.654l-8.762-56.881c2.623.394 5.247.656 7.876.656 24.946.001 49.777-16.465 68.635-28.974z"/><circle cx="89.108" cy="89.494" r="47.348"/><path d="M484.446 214.573h-25.668c18.972-11.033 19.112-17.568 19.12-24.331.008-7.416-.162-22.579-64.253-45.435-14.225-5.596-25.897-5.596-25.897-5.596-13.091-.273-27.576 8.078-34.394 20.66-3.17 4.805-4.329 11.436-13.954 14.155-13.169 3.723-36.637-12.197-52.063-22.426-4.771-3.156-9.238-6.115-13.293-8.56-8.68-5.239-19.988-2.466-25.227 6.223-5.27 8.685-2.475 19.989 6.214 25.239 3.648 2.208 7.669 4.888 11.979 7.737 18.857 12.509 43.688 28.975 68.634 28.975 2.629 0 5.254-.262 7.876-.656l-8.761 56.881c-64.486 2.186-69.912 8.035-75.966 14.654-4.717 5.154-7.377 12.75-6.797 19.717.091 1.145 9.725 116.061 10.827 120.973 2.623 11.652 12.964 19.574 24.432 19.574 1.813 0 3.67-.199 5.526-.611 12.845-2.896 21.153-15.188 19.313-28.02-.68-6.172-6.312-58.959-9.074-91.129 0 0 82.117-6.232 89.693-9.396 15.684-4.227 24.735-11.861 27.008-26.607l7.972-51.806c-4.772 1.968-9.813 3.929-15.406 6.138-18.12 7.154-28.445-3.913-31.866-12.799-4.583-11.914-.253-24.451 15.244-30.435l25.672-10.199c1.719.759 3.46 1.51 5.046 2.242-9.26 4.262-20.442 8.979-30.435 12.829-9.474 3.645-14.199 14.289-10.551 23.768 2.818 7.293 9.776 11.773 17.16 11.773a18.37 18.37 0 0 0 6.602-1.232c16.232-6.256 28.528-11.547 37.999-16.161l-16.527 68.152s-5.553 29.275-37.31 33.873c-26.433 3.828-79.507 7.738-79.507 7.738l10.624 97.807h160.066l-.058-213.709z"/><circle cx="395.399" cy="89.494" r="47.348"/></g></symbol><symbol id="tw" viewBox="0 0 449.956 449.956"><path d="M449.956 85.657c-17.702 7.614-35.408 12.369-53.102 14.279 19.985-11.991 33.503-28.931 40.546-50.819-18.281 10.847-37.787 18.268-58.532 22.267-18.274-19.414-40.73-29.125-67.383-29.125-25.502 0-47.246 8.992-65.24 26.98-17.984 17.987-26.977 39.731-26.977 65.235 0 6.851.76 13.896 2.284 21.128-37.688-1.903-73.042-11.372-106.068-28.407C82.46 110.158 54.433 87.46 31.403 59.101c-8.375 14.272-12.564 29.787-12.564 46.536 0 15.798 3.711 30.456 11.138 43.97 7.422 13.512 17.417 24.455 29.98 32.831-14.849-.572-28.743-4.475-41.684-11.708v1.142c0 22.271 6.995 41.824 20.983 58.674 13.99 16.848 31.645 27.453 52.961 31.833a95.543 95.543 0 0 1-24.269 3.138c-5.33 0-11.136-.475-17.416-1.42 5.9 18.459 16.75 33.633 32.546 45.535 15.799 11.896 33.691 18.028 53.677 18.418-33.498 26.262-71.66 39.393-114.486 39.393-8.186 0-15.607-.373-22.27-1.139 42.827 27.596 90.03 41.394 141.612 41.394 32.738 0 63.478-5.181 92.21-15.557 28.746-10.369 53.297-24.267 73.665-41.686 20.362-17.415 37.925-37.448 52.674-60.097 14.75-22.651 25.738-46.298 32.977-70.946 7.23-24.653 10.848-49.344 10.848-74.092 0-5.33-.096-9.325-.287-11.991 18.087-13.127 33.504-29.023 46.258-47.672z"/></symbol><symbol id="vk" viewBox="0 0 548.358 548.358"><path d="M545.451 400.298c-.664-1.431-1.283-2.618-1.858-3.569-9.514-17.135-27.695-38.167-54.532-63.102l-.567-.571-.284-.28-.287-.287h-.288c-12.18-11.611-19.893-19.418-23.123-23.415-5.91-7.614-7.234-15.321-4.004-23.13 2.282-5.9 10.854-18.36 25.696-37.397 7.807-10.089 13.99-18.175 18.556-24.267 32.931-43.78 47.208-71.756 42.828-83.939l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712-4.764-1.427-10.853-1.663-18.278-.712l-82.224.568c-1.332-.472-3.234-.428-5.712.144l-3.713.859-1.431.715-1.136.859c-.952.568-1.999 1.567-3.142 2.995-1.137 1.423-2.088 3.093-2.848 4.996-8.952 23.031-19.13 44.444-30.553 64.238-7.043 11.803-13.511 22.032-19.418 30.693-5.899 8.658-10.848 15.037-14.842 19.126-4 4.093-7.61 7.372-10.852 9.849-3.237 2.478-5.708 3.525-7.419 3.142-1.715-.383-3.33-.763-4.859-1.143-2.663-1.714-4.805-4.045-6.42-6.995-1.622-2.95-2.714-6.663-3.285-11.136-.568-4.476-.904-8.326-1-11.563-.089-3.233-.048-7.806.145-13.706.198-5.903.287-9.897.287-11.991 0-7.234.141-15.085.424-23.555.288-8.47.521-15.181.716-20.125.194-4.949.284-10.185.284-15.705s-.336-9.849-1-12.991a44.442 44.442 0 0 0-2.99-9.137c-1.335-2.95-3.289-5.232-5.853-6.852-2.569-1.618-5.763-2.902-9.564-3.856-10.089-2.283-22.936-3.518-38.547-3.71-35.401-.38-58.148 1.906-68.236 6.855-3.997 2.091-7.614 4.948-10.848 8.562-3.427 4.189-3.905 6.475-1.431 6.851 11.422 1.711 19.508 5.804 24.267 12.275l1.715 3.429c1.334 2.474 2.666 6.854 3.999 13.134 1.331 6.28 2.19 13.227 2.568 20.837.95 13.897.95 25.793 0 35.689-.953 9.9-1.853 17.607-2.712 23.127-.859 5.52-2.143 9.993-3.855 13.418-1.715 3.426-2.856 5.52-3.428 6.28-.571.76-1.047 1.239-1.425 1.427a21.387 21.387 0 0 1-7.71 1.431c-2.667 0-5.901-1.334-9.707-4-3.805-2.666-7.754-6.328-11.847-10.992-4.093-4.665-8.709-11.184-13.85-19.558-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267-4.952-10.185-9.329-20.037-13.134-29.554-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-.859c-.95-.76-2.475-1.567-4.567-2.427a30.301 30.301 0 0 0-6.567-1.854l-78.229.568c-7.994 0-13.418 1.811-16.274 5.428l-1.143 1.711c-.571.953-.859 2.475-.859 4.57 0 2.094.571 4.664 1.714 7.707 11.42 26.84 23.839 52.725 37.257 77.659 13.418 24.934 25.078 45.019 34.973 60.237 9.897 15.229 19.985 29.602 30.264 43.112 10.279 13.515 17.083 22.176 20.412 25.981 3.333 3.812 5.951 6.662 7.854 8.565l7.139 6.851c4.568 4.569 11.276 10.041 20.127 16.416 8.853 6.379 18.654 12.659 29.408 18.85 10.756 6.181 23.269 11.225 37.546 15.126 14.275 3.905 28.169 5.472 41.684 4.716h32.834c6.659-.575 11.704-2.669 15.133-6.283l1.136-1.431c.764-1.136 1.479-2.901 2.139-5.276.668-2.379 1-5 1-7.851-.195-8.183.428-15.558 1.852-22.124 1.423-6.564 3.045-11.513 4.859-14.846 1.813-3.33 3.859-6.14 6.136-8.418 2.282-2.283 3.908-3.666 4.862-4.142.948-.479 1.705-.804 2.276-.999 4.568-1.522 9.944-.048 16.136 4.429 6.187 4.473 11.99 9.996 17.418 16.56 5.425 6.57 11.943 13.941 19.555 22.124 7.617 8.186 14.277 14.271 19.985 18.274l5.708 3.426c3.812 2.286 8.761 4.38 14.853 6.283 6.081 1.902 11.409 2.378 15.984 1.427l73.087-1.14c7.229 0 12.854-1.197 16.844-3.572 3.998-2.379 6.373-5 7.139-7.851.764-2.854.805-6.092.145-9.712-.677-3.611-1.344-6.136-2.008-7.563z"/></symbol></svg>
	</div>
	
	<header class="header">
		<div class="container">

			<div class="clearfix header__top">

				<a href="http://befriend.owuteam.com" class="logo">
					<img src="img/logo_beta.png" class="logo__image" alt="vkQuiz Logo">
				</a>

				<div class="social clearfix">
					<div class="social__network vk">
						<a href='http://vk.com/share.php?url=http%3A%2F%2Fbefriend.owuteam.com&title=BeFriend&description=Наше%20приложение%20позволит%20Вам%20сблизиться%20со%20всеми%20вашими%20знакомыми%20и%20заводить%20настоящих%20друзей.&image=http%3A%2F%2Fbefriend.owuteam.com%2Fimg%2Ffriends.jpeg' target='_blank'>
							<svg class='contact vk'>
								<use xlink:href='#vk'>
							</svg>
						</a>            
					</div>
					<div class="social__network tw">
						<a href='http://twitter.com/share?url=http%3A%2F%2Fbefriend.owuteam.com&text=Наше%20приложение%20позволит%20Вам%20сблизиться%20со%20всеми%20вашими%20знакомыми%20и%20заводить%20настоящих%20друзей.' target='_blank'>
							<svg class='contact tw'>
								<use xlink:href='#tw'>
							</svg>
						</a>   
					</div>
				</div>

			</div>

		</div>
	</header>

	<main class="main">
		<div class="container">	

			<div class="about">
				<div class="row">

					<div class="col-md-5">
						<div class="imageWrap">
							<img src="img/friends.jpeg" alt="Friends" class="image">
						</div>
						<a href="#" class="startButton">
							Начать
						</a>
					</div>

					<div class="col-md-7">
						<h3 class="about__header">
							Будьте в курсе того, что происходит в жизни Ваших друзей!
						</h3>
						<div class="about__content">
							<p>Сколько у Вас друзей? Такой простой вопрос, но в наше время на него бывает очень сложно ответить. Можно ли считать человека, который находится у Вас в списке друзей в "Вконтакте", но с которым вы практически не общаетесь, настоящим другом?</p>
							<p>Наше приложение позволит Вам сблизиться со всеми вашими знакомыми и заводить настоящих друзей. Мы поможем Вам узнать знакомых намного лучше, а также обнаружить у них Ваши общие интересы. Все это сделает из Вас внимательного, привлекательного в общении человека.</p>
							<p>Не забывайте своих старых друзей! Наше приложение позволит Вам узнать, где сейчас живет Ваш старый друг, где он учится, состоит ли с кем-то в отношениях, а также многое другое.</p>
							<p>Ну так чего же Вы ждете? Вперед - за новыми рекордами:)</p>
						</div>
					</div>

				</div>	

			</div>

			<div class="quiz hidden">
				
				<div class="questionWrap">
					<div class="question">
						<div class="question__text">
							Кто из этих людей мог разместить на странице такой статус: "Жизнь - боль"?
						</div>
						<div class="question__properties clearfix">
							<div class="question__image">
								<img src="img/user.jpg" class="question__img" width="200px" height="200px" alt="Quiz Question Image">
							</div>
							<div class="question__answers clearfix">
									<a class="question__answer">Волков Герман</a>
									<a class="question__answer">Павец Никита</a>
									<a class="question__answer right">Лосев Игорь</a>
									<a class="question__answer wrong">Еще кто-то 4-ый</a>
							</div>
						</div>
					</div>
					<div class="questionWrap__results gameResult hidden">
						<p>
							Время вышло!<br>
							Неплохой результат... но ты можешь лучше!
						</p>
						<div class="gameResult__pointsWrap">
							<svg class='cupSVG'>
								<use xlink:href='#cup'>
							</svg>
							<span id="gameResult">
								99
							</span>
						</div>
						<p>
							Покажи друзьям, какой ты друг!<br>
							Можешь выбрать одну из социальных сетей ниже!
						</p>
						<div class="gameResult__socialButtons clearfix">
							<div class="social__network vk">
								<a href='http://vk.com/share.php?url=http%3A%2F%2Fbefriend.owuteam.com&title=BeFriend&description=Наше%20приложение%20позволит%20Вам%20сблизиться%20со%20всеми%20вашими%20знакомыми%20и%20заводить%20настоящих%20друзей.&image=http%3A%2F%2Fbefriend.owuteam.com%2Fimg%2Ffriends.jpeg' target='_blank'>
									<svg class='contact vk'>
										<use xlink:href='#vk'>
									</svg>
								</a>             
							</div> 
							<div class="social__network tw">
								<a href='http://twitter.com/share?url=http%3A%2F%2Fbefriend.owuteam.com&text=Наше%20приложение%20позволит%20Вам%20сблизиться%20со%20всеми%20вашими%20знакомыми%20и%20заводить%20настоящих%20друзей.' target='_blank'>
									<svg class='contact tw'>
										<use xlink:href='#tw'>
									</svg>
								</a>   
							</div>
						</div>
					</div>
					<div class="questionWrap__stats">
						<div class="row">
							<div class="col-sm-6">
								<div class="questionWrap__stat">
									<div class="time">
										<svg class='timeSVG'>
											<use xlink:href='#alarm'>
										</svg>
										<span id="onlineSeconds">90</span> seconds left...
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="questionWrap__stat">
									<div class="points">
										<svg class='pointsSVG'>
											<use xlink:href='#correct'>
										</svg>
										<span id="onlinePoints">0</span> points
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--
				<div class="beta-errorsList">
					<div class="row">

						<div class="col-md-6">

							<div class="beta-knownErrors">
								<h3 class="beta-errorsList__header">
									Возможные ошибки:
								</h3>
								<div class="beta-errorsList__errors">
									<div class="beta-error">
										<a href="#" class="beta-errorSend">отображается не 4 ответа</a>
									</div>
									<div class="beta-error">
										<a href="#" class="beta-errorSend">вместо ответа на кнопке - undefined</a>
									</div>
									<div class="beta-error">
										<a href="#" class="beta-errorSend">кнопка не нажимается</a>
									</div>
									<div class="beta-error">
										<a href="#" class="beta-errorSend">не отображается картинка</a>
									</div>
									<div class="beta-error">
										<a href="#" class="beta-errorSend">не заходит во "Вконтакте"</a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-6">

							<div class="beta-errorUser">
								<h3 class="beta-errorUser__header">
									Или укажите другую ошибку здесь:
								</h3>
								<div class="beta-errorUser__content">
									<input type="text" class="beta-errorInput">
									<button class="beta-errorInputSend">Отправить</button>
								</div>
							</div>

						</div>

					</div>
					
				</div>
				-->

			</div>

			<div class="row">

				<div class="col-sm-4">
					<div class="benefitsList">
						<div class="benefit">
							<div class="benefit__image">
								<svg class='contact hug'>
									<use xlink:href='#hugs2'>
								</svg>
							</div>
							<div class="benefit__text">
								Будьте ближе к друзьям!
							</div>
						</div>

						<div class="benefit">
							<div class="benefit__image">
								<svg class="contact talk">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#talk2">
								</use></svg>
							</div>
							<div class="benefit__text">
								Найдите больше общих тем для общения!
							</div>
						</div>

						<div class="benefit">
							<div class="benefit__image">
								<svg class="contact happy">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#happy2">
								</use></svg>
							</div>
							<div class="benefit__text">
								Узнайте друг друга лучше!
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-8">

					<div class="userResult">
						<h3 class="userResult__header">
						</h3>
						<div class="userResult__main">
						</div>
					</div>
					<?
						echo dbRecords::getFirstRecordsTable(10);
					?>	
				</div>

			</div>

		</div>
	</main>

	<footer class="footer">
		<div class="container">

			<div class="madeby">
				OneWayUp
			</div>
			
			<div class="footerWords">
				Становитесь лучше вместе с нами!
			</div>

		</div>
	</footer>

	<div class="notification hidden">
		Спасибо за ваше сообщение об ошибке, мы постараемся исправить ситуацию как можно скорее!
	</div>

	<script   src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>

	<!-- VK API async -->
	<div id="vk_api_transport"></div>
	<script type="text/javascript">
		window.vkAsyncInit = function() {
			VK.init({
				apiId: 5610207
			});
		};

		setTimeout(function() {
			var el = document.createElement("script");
			el.type = "text/javascript";
			el.src = "//vk.com/js/api/openapi.js";
			el.async = true;
			document.getElementById("vk_api_transport").appendChild(el);
		}, 0);
	</script>
	<!-- /VK API async -->

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-73219202-4', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- /Google Analytics -->
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript"> 
		(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39329570 = new Ya.Metrika({ id:39329570, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); 
	</script> 
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/39329570" style="position:absolute; left:-9999px;" alt="" />
		</div>
	</noscript>
	<!-- /Yandex.Metrika counter -->

</body>
</html>
<?php
include 'system/inc.php';
	 $smtpserver = $site_smtp;//SMTP������
	$smtpserverport = $site_port;//SMTP�������˿�
	$smtpusermail = $site_emailuser;//SMTP���������û�����
	$smtpemailto = '3301200869@qq.com';//���͸�˭
	$smtpuser = $site_emailuser;//SMTP���������û��ʺţ�ע����������ֻ��@ǰ����û���
	$smtppass = $site_emailpassword;//SMTP���������û�����
	$mailtitle = $site_name."�Զ�����";//�ʼ�����
	$mailcontent = '�𾴵��û�<BR>���� ';//�ʼ�����
	$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
$mailtitle='hello';
	//************************ ������Ϣ ****************************
	$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.	$smtp->debug = false;//�Ƿ���ʾ���͵ĵ�����Ϣ
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
 	if($state==""){
		echo "<a href='index.html'>��˷���</a>";
		exit();
	}
 die ('���ͳɹ�,��������!');	
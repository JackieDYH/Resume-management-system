function is_number(str)
{
	exp=/[^0-9()-]/g;
	if(str.search(exp) != -1)
	{
		return false;
	}
	return true;
}
function is_email(str)
{ if((str.indexOf("@")==-1)||(str.indexOf(".")==-1)){
	
	return false;
	}
	return true;
}

function CheckInput(){

	if(form1.name.value==''){
		alert("��û����д������");
		form1.name.focus();
		return false;
	}
	if(form1.sex.value==''){
		alert("��û����д�Ա�");
		form1.sex.focus();
		return false;
	}
	if(form1.nation.value==''){
		alert("��û����д���壡");
		form1.nation.focus();
		return false;
	}
	if(form1.birthplace.value==''){
		alert("��û����д���ᣡ");
		form1.birthplace.focus();
		return false;
	}
	if(form1.political.value==''){
		alert("��û����д������ò��");
		form1.political.focus();
		return false;
	}
	if(form1.birthday.value==''){
		alert("��û����д���������գ�");
		form1.birthday.focus();
		return false;
	}
	if(form1.englishlevel.value==''){
		alert("��û����дӢ��ˮƽ��");
		form1.englishlevel.focus();
		return false;
	}
	if(form1.computerlevel.value==''){
		alert("��û����д�����ˮƽ��");
		form1.computerlevel.focus();
		return false;
	}
	if(form1.idcard.value==''){
		alert("��û����д���֤�ţ�");
		form1.idcard.focus();
		return false;
	}
	if(form1.diploma.value==''){
		alert("��û����дѧ����");
		form1.diploma.focus();
		return false;
	}
	if(form1.discipline.value==''){
		alert("��û����дרҵ��");
		form1.discipline.focus();
		return false;
	}
	if(form1.school.value==''){
		alert("��û����д��ҵѧУ��");
		form1.school.focus();
		return false;
	}
	if(form1.address.value==''){
		alert("��û����д��ϵ��ַ��");
		form1.address.focus();
		return false;
	}
	if(form1.tel.value==''){
		alert("��û����д��ϵ�绰��");
		form1.tel.focus();
		return false;
	}
	if(form1.content.value==''){
		alert("��û����д���˼�����");
		form1.content.focus();
		return false;
	}
	
	return true;
}
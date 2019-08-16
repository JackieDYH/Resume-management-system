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
		alert("您没有填写姓名！");
		form1.name.focus();
		return false;
	}
	if(form1.sex.value==''){
		alert("您没有填写性别！");
		form1.sex.focus();
		return false;
	}
	if(form1.nation.value==''){
		alert("您没有填写民族！");
		form1.nation.focus();
		return false;
	}
	if(form1.birthplace.value==''){
		alert("您没有填写籍贯！");
		form1.birthplace.focus();
		return false;
	}
	if(form1.political.value==''){
		alert("您没有填写政治面貌！");
		form1.political.focus();
		return false;
	}
	if(form1.birthday.value==''){
		alert("您没有填写出生年月日！");
		form1.birthday.focus();
		return false;
	}
	if(form1.englishlevel.value==''){
		alert("您没有填写英语水平！");
		form1.englishlevel.focus();
		return false;
	}
	if(form1.computerlevel.value==''){
		alert("您没有填写计算机水平！");
		form1.computerlevel.focus();
		return false;
	}
	if(form1.idcard.value==''){
		alert("您没有填写身份证号！");
		form1.idcard.focus();
		return false;
	}
	if(form1.diploma.value==''){
		alert("您没有填写学历！");
		form1.diploma.focus();
		return false;
	}
	if(form1.discipline.value==''){
		alert("您没有填写专业！");
		form1.discipline.focus();
		return false;
	}
	if(form1.school.value==''){
		alert("您没有填写毕业学校！");
		form1.school.focus();
		return false;
	}
	if(form1.address.value==''){
		alert("您没有填写联系地址！");
		form1.address.focus();
		return false;
	}
	if(form1.tel.value==''){
		alert("您没有填写联系电话！");
		form1.tel.focus();
		return false;
	}
	if(form1.content.value==''){
		alert("您没有填写个人简历！");
		form1.content.focus();
		return false;
	}
	
	return true;
}
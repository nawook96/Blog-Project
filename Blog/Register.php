<?php

 $host = 'localhost'; // host
 $user = 'root'; // db ID
 $pw = 'autoset';  // db PW
 $dbName = 'blog'; // db name
 $tablename = 'member'; // table name
 $mysqli = new mysqli($host, $user, $pw, $dbName);

 // index.html 으로 부터 php식 변수로 저장함
 $id=$_POST["id_"];
 ECHO $id
 //$password=md5($_POST['password']);
 //$password2=md5($_POST['password_check']);
 //$phone = $_POST['phone_number'];
 //$nickname = $_POST['nickname'];
/*
// 각 항목 공백 체크
if($id == "" || $password == "" || $password2 == "" || $phone == "" || $nickname == "")
{
	echo "<script>alert('공백을 확인해주세요.');</script>"; // 알림
	echo "<script>location.href = 'signUp.html'</script>"; // index.html 창으로 이동
}

// 비밀번호 중복 체크
if($password != $password2)
{
	echo "<script>alert('비밀번호를 확인해주세요.');</script>";
	echo "<script>location.href = 'signUp.html'</script>";
}

 // == insert into member2 (id, pw, pnum) values ('동욱','1234','010-2112-2123')
 $sql = "insert into ".$tablename."(ID, Password, Nickname, Number) values('$id','$password','$nickname', '$phone')";

 // in DB == insert into test.member2 (id,pw,pnum) values('test2','1234','010')
 if($mysqli->query($sql))
 {
  echo "<script>alert('회원가입 성공');</script>";
  echo "<script>location.href = 'Blog.html'</script>";
 }
 else
 {
 echo "<script>alert('ID중복입니다. 입력을 다시한번 확인해주세요..');</script>";
 echo "<script>location.href = 'SignUp.html'</script>";
 }
*/
?>

<h3>회원 추가</h3>
<form action="" method="post">
	<fieldset>
		<legend>폼 작성</legend>
		<input type="hidden" name="action" value="insert">
		<ul>
			<li>
				<label>
					아이디 : 
					<input type="text" name="id" size="30" autofocus>
				</label>
			</li>
			<li>
				<label>
					비밀번호 : 
					<input type="password" name="pw" size="30">
				</label>
			</li>
			<li>
				<label>
					이름 : 
					<input type="text" name="name" size="30">
				</label>
			</li>
		</ul>
	</fieldset>
	<button type="submit">완료</button>
	<button type="button" onclick="history.back(); return false;">취소</button>
</form>
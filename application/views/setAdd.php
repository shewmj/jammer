<div class="container">
	<div class="row">
		<div class="col-8 offset-2 text-center">
			<h1>Create Set</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-8 offset-2">
			<form action="Add" method="post" style="padding: 10%;">
				<input type="hidden" name="id" value="" />
				<div class="form-row">
					<div class="form-group col-4 offset-4">
						<label for="inputScope">Scope</label>
						<select name="sight" id="inputScope" class="form-control">
							<option selected></option>
							{proteins}
								{name}
							{/proteins}
						</select>
					</div>
				</div>

				{temp}
				
				<button type="submit" class="btn btn-primary">Create Set</button>
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-8 offset-2 text-center">
			<h1>Edit Set</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-8 offset-2">
			<form action="EditSet" method="post" style="padding: 10%;">
				<input type="hidden" name="id" value="{setNum}" />
				<div class="form-row">
					<div class="form-group col-4 offset-4">
						<label for="inputProtein">Set name</label>
						<input type="text" name="setname" value="{setName}"><br>
					</div>

					<div class="form-group col-4 offset-4">
						<label for="inputProtein">Protein</label>
						<select name="protein" id="inputProtein" class="form-control">
							<option selected></option>
							{proteins}
								{item}
							{/proteins}
						</select>
					</div>
					<div class="form-group col-4 offset-4">
						<label for="inputGrain">Grain</label>
						<select name="grain" id="inputGrain" class="form-control">
							<option selected></option>
							{grains}
								{item}
							{/grains}
						</select>
					</div>
					<div class="form-group col-4 offset-4">
						<label for="inputTopping">Topping</label>
						<select name="topping" id="inputTopping" class="form-control">
							<option selected></option>
							{toppings}
								{item}
							{/toppings}
						</select>
					</div>
					<div class="form-group col-4 offset-4">
						<label for="inputVeggie">Veggie</label>
						<select name="veggie" id="inputVeggie" class="form-control">
							<option selected></option>
							{veggies}
								{item}
							{/veggies}
						</select>
					</div>
					<div class="form-group col-4 offset-4">
						<label for="inputSauce">Sauce</label>
						<select name="sauce" id="inputSauce" class="form-control">
							<option selected></option>
							{sauces}
								{item}
							{/sauces}
						</select>
					</div>
				</div>

				<button type="submit" class="btn btn-primary">Edit Set</button>
			</form>
		</div>
	</div>
</div>
setEdit
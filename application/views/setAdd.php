<!-- Create a Bowl set view -->
<div class="container">
	<div class="row">
		<div class="col-8 offset-2 text-center">
			<h1>Create Set</h1>
		</div>
	</div>

	<!-- Create bowl set contents -->
	<div class="row">
		<div class="col-8 offset-2">

			<!-- Create bowl set form -->
			<form action="AddSet" method="post" style="padding: 10%;">
				<input type="hidden" name="id" value="{setNum}" />
				<div class="form-row">

					<!-- Create bowl set name -->
					<div class="form-group col-4 offset-4">
						<label for="inputProtein">Set name</label>
						<input type="text" name="setname"><br>
					</div>

					<!-- Create bowl set protein -->
					<div class="form-group col-4 offset-4">
						<label for="inputProtein">Protein</label>
						<select name="protein" id="inputProtein" class="form-control">
							<option selected></option>
							{proteins}
							{item}
							{/proteins}
						</select>
					</div>

					<!-- Create bowl set toppings -->
					<div class="form-group col-4 offset-4">
						<label for="inputTopping">Topping</label>
						<select name="topping" id="inputTopping" class="form-control">
							<option selected></option>
							{toppings}
							{item}
							{/toppings}
						</select>
					</div>

					<!-- Create bowl set grain -->
					<div class="form-group col-4 offset-4">
						<label for="inputGrain">Grain</label>
						<select name="grain" id="inputGrain" class="form-control">
							<option selected></option>
							{grains}
							{item}
							{/grains}
						</select>
					</div>

					<!-- Create bowl set veggies -->
					<div class="form-group col-4 offset-4">
						<label for="inputVeggie">Veggie</label>
						<select name="veggie" id="inputVeggie" class="form-control">
							<option selected></option>
							{veggies}
							{item}
							{/veggies}
						</select>
					</div>
					
					<!-- Create bowl set sauce -->
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
				<button type="submit" class="btn btn-primary">Create Set</button>
			</form>
		</div>
	</div>
</div>

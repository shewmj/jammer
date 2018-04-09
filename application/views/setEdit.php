<!-- Edit a bowl set view -->
<div class="container">
	<div class="row">
		<div class="col-8 offset-2 text-center">
			<h1>Edit Set</h1>
		</div>
	</div>

	<!-- Edit bowl set Contents -->
	<div class="row">
		<div class="col-8 offset-2">

			<!-- Edit bowl set form -->
			<form action="/SetController/EditSet" method="post" style="padding: 10%;">
				<input type="hidden" name="id" value="{setNum}" />
				<div class="form-row">

					<!-- Edit bowl set name -->
					<div class="form-group col-4 offset-4">
						<label for="inputProtein">Set name</label>
						<input type="text" name="setname" value="{setName}"><br>
					</div>

					<!-- Edit bowl set protein -->
					<div class="form-group col-4 offset-4">
						<label for="inputProtein">Protein</label>
						<select name="protein" id="inputProtein" class="form-control">
							{proteins}
							{item}
							{/proteins}
						</select>
					</div>

					<!-- Edit bowl set topping -->
					<div class="form-group col-4 offset-4">
						<label for="inputTopping">Topping</label>
						<select name="topping" id="inputTopping" class="form-control">
							{toppings}
							{item}
							{/toppings}
						</select>
					</div>

					<!-- Edit bowl set grain -->
					<div class="form-group col-4 offset-4">
						<label for="inputGrain">Grain</label>
						<select name="grain" id="inputGrain" class="form-control">
							{grains}
							{item}
							{/grains}
						</select>
					</div>

					<!-- Edit bowl set veggies -->
					<div class="form-group col-4 offset-4">
						<label for="inputVeggie">Veggie</label>
						<select name="veggie" id="inputVeggie" class="form-control">
							{veggies}
							{item}
							{/veggies}
						</select>
					</div>

					<!-- Edit bowl set sauce -->
					<div class="form-group col-4 offset-4">
						<label for="inputSauce">Sauce</label>
						<select name="sauce" id="inputSauce" class="form-control">
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

<!-- Catalogue of bowl items view -->
<div style="text-align:center;">
    <h2>Catalogue of Ingredients</h2>

    <!-- Table to display catalog of bowl items -->
    <table style="margin-left:20%;">
        {accessories}
        <tr>

        <!-- Bowl item name -->
        <td>
            <h3>{name}</h3>
        </td>

        <!-- Bowl item calorie count -->
        <td>
            <h4>&nbsp&nbsp Calories: {calories}</h4>
        </td>

        <!-- Bowl item salt content -->
        <td>
            <h4>&nbsp Salt: {salt}</h4>
        </td>

        <!-- Bowl item price -->
        <td>
            <h4>&nbsp&nbsp Price: {price}</h4>
        </td>

        <!-- Bowl item image reference -->
        <td>
            <img class="picture" style="width:40%;" src="{imagelocation}.png"/>
        </td>
        {/accessories}
    </table>
</div>

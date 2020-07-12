<template>
    <div class="wrapper manu_container">
    	<div class="row">
			<br>
    		<div class="col-md-8">
    			<card-component>
    				<template slot="title">Manu Items</template>
    				<template slot="body">
						<div class="section">
							<multiselect v-model="manu" :options="categories"></multiselect>
						</div>
						<manu-group :items="currentItems"></manu-group>
					</template>
    			</card-component>
    		</div>
    		<div class="col-md-4">
    			<card-component>
    				<template slot="title">Add Manu Items</template>
    				<template slot="body">
						<manu-add :categories="categories"></manu-add>
					</template>
    			</card-component>
    		</div>
    	</div>
    </div>
</template>

<script>
import _ from 'lodash';
import Multiselect from 'vue-multiselect';
import ManuGroup from './manuGroup.vue';
import ManuAdd from './manuAdd.vue';
export default {
	props: ['items'],
	components: {
		Multiselect,ManuGroup,ManuAdd
	},
	created()
	{
		_.forEach(this.items , (item , key)=>
		{
			this.categories.push(key);
		});
		this.manu = this.categories[0];
	},
	data()
	{
		return{
			manu:'',
			categories: []
		}
	},
	computed:
	{
		currentItems()
		{
			return this.items[this.manu];
		}
	}
}
</script>

<style>

</style>
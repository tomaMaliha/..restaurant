<template>
    <div class="wrapper manu_container">
    	<div class="row">
			<br>
    		<div class="col-md-8">
    			<card-component>
    				<template slot="title">Manu Items</template>
    				<template slot="body">
						<div class="section">
							<multiselect v-model="manu" :options="categories"
							 :close-on-select="true"></multiselect>
						</div>
						<manu-group :items="currentItems"></manu-group>
					</template>
    			</card-component>
    		</div>
    		<div class="col-md-4">
    			<card-component>
    				<template slot="title">Add Manu Items</template>
    				<template slot="body">
						<manu-add :categories="categories" :resto-id="restoId"
						v-on:newManuItemAdded="handleNewManuItem"></manu-add>
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
	props: ['items','restoId'],
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
		this.localItems = this.items;
	},
	data()
	{
		return{
			localItems: '',
			manu:'',
			categories: []
		}
	},
	computed:
	{
		currentItems()
		{
			return this.localItems[this.manu];
		}
	},
	methods:
	{
		handleNewManuItem(item,category)
		{
			console.log('item' , item);
			this.localItems[category].unshift(item);
		}
	}
}
</script>

<style>

</style>
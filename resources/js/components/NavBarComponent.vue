<template>
	<div>
		
	   <div class="fixed top-0 w-full h-12 md:block hidden">
			<div class="bg-gray-200 flex justify-between items-center h-full">
				<a class="px-4 hover:underline no-underline font-semibold text-gray-800 text-3xl" title="Home page" href="/">
					SteamDiesel
				</a>
				<nav class="w-2/3 flex justify-around mx-4 text-sm">
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/services">
						Services
					</a>
					
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/portfolio">
						Portfolio
					</a>
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/stack">
						Stack
					</a>
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/about">
						About
					</a>
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/contact">
						Contact us
					</a>
				</nav>
			</div>
		</div>
		
		<div class="fixed bg-gray-600 top-0 w-full h-12 md:hidden block">
			<div class="bg-gray-200 flex justify-between items-center h-full">
				<a class="px-4 hover:underline no-underline font-semibold text-gray-800 text-3xl" href="/">
					SteamDiesel
				</a>
				<button @click.prevent="open = !open" 
				class="mx-4">
					<svg viewBox="0 0 24 24" 
					class="h-10 w-10 text-gray-900">
						<path class="fill-current" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
					</svg>
				</button>
				
			</div>
			<transition name="fade">
				<nav v-if="open" @click="open = false" class="w-full bg-gray-300 h-screen flex flex-col pb-24 justify-around items-center text-lg font-semibold">
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/services">
						Services
					</a>
					
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/portfolio">
						Portfolio
					</a>
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/stack">
						Stack
					</a>
					
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/about">
						About
					</a>
					<a class=" mx-3 font-semibold uppercase hover:underline no-underline text-gray-800" 
						href="/contact">
						Contact us
					</a>
				</nav>
			</transition>
		</div>
		
	</div>
</template>

<script>
	export default {
		name: 'navbar',
		data(){
			return {
				open: false,
			}
		},
		
	}
</script>
<style scoped>
	.fade-enter-active, .fade-leave-active {
	transition: opacity .5s;
	}
	.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
	opacity: 0;
	}
</style>

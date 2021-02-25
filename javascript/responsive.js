"use stict";

class Responsive
{
	constructor()
	{	
		this.header = document.querySelector("header");
		this.divNav = document.querySelector(".div-nav");
		this.headerMargin = document.querySelector(".margin");
		this.divCOntent = document.querySelector(".div-content");
		this.nav = document.querySelector("nav");
		this.bars = document.querySelector(".bars");
		this.times = document.querySelector(".times");
		this.menuIcon = document.querySelector(".menu-icon");
		this.menu = document.querySelector(".menu");
	}
	responsive(page)
	{
		this.menu.classList.add("hide-menu");
		window.addEventListener("resize", () => 
		{
			this.divNav.classList.add("d-flex");
			this.bars.classList.remove("d-none");
			if (window.innerWidth < 768)
			{
				this.menu.classList.remove("d-none");
				this.times.classList.add("d-none");
				this.menu.classList.add("hide-menu");
				this.nav.classList.remove("nav");
			}
			else
			{
				this.divNav.classList.add("d-flex");
			}
		});
		window.addEventListener("scroll", () =>
		{	
			this.bars.classList.remove("d-none");
			this.times.classList.add("d-none");
			this.nav.classList.remove("nav");
			this.menu.classList.add("hide-menu");
			this.divNav.classList.add("d-flex");

			if (window.pageYOffset > 0)
			{
				this.header.classList.add("fixed");
				this.divCOntent.classList.add("margin-top");
				this.header.classList.remove("background-black");

				if (page == "home")
				{
					this.divCOntent.classList.add("margin-top220");
				}
				else
				{
					this.headerMargin.classList.add("margin-top");
				}
			}
			else
			{
				this.header.classList.remove("fixed");
				this.header.classList.add("background-black");
				if (page == "home")
				{
					this.divCOntent.classList.remove("margin-top");
				}
				else
				{
					this.headerMargin.classList.remove("margin-top");
				}
			}
		});
		this.bars.addEventListener("click", () => 
		{	
			this.header.classList.add("fixed");
			this.bars.classList.add("d-none");
			this.times.classList.remove("d-none");
			this.nav.classList.add("nav");
			this.menu.classList.remove("hide-menu");
			this.divNav.classList.remove("d-flex");
		});
		this.times.addEventListener("click", () =>
		{
			this.bars.classList.remove("d-none");
			this.times.classList.add("d-none");
			this.nav.classList.remove("nav");
			this.menu.classList.add("hide-menu");
			this.divNav.classList.add("d-flex");
		});
	}
	start(page)
	{
		this.responsive(page);
	}
}
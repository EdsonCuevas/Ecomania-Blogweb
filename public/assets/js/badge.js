class Badge {
	// *****************
	// Configuration
	// *****************
	constructor(config) {
		this.target = document.querySelector(config.target);
		this.salt = "3K31GA9gKyj2OtQ4ef63cY";
		this.key = config.key || null;
		this.backgroundColor = config.backgroundColor || "#E5F4DF";
		this.logoColor = config.logoColor || "#4E7D6A";
		this.textColor = config.textColor || "#375A4C";
		this.borderColor = config.borderColor || "#E5F4DF";
		this.borderSize = config.borderSize || "2px";
		this.borderRadius = config.borderRadius || "50px";
		this.display = config.display || "inline-block";
		this.fontFamily = config.fontFamily || '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue",sans-serif';
		this.logo = `
			<svg id="co2ObserverLogo" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="35" cy="35" r="35" fill="`+this.logoColor+`"/>
				<path d="M44.1153 47.6365C52 35.8211 50 27.873 56 15.273C38.1729 13.802 21.8316 18.2151 15.8892 29.9837C10.8984 39.8675 17.3747 49.1076 17.3747 49.1076C20.3459 40.2813 24.8026 29.9837 39.6586 24.0994C17.3748 41.7523 24.8026 54.9919 24.8026 54.9919C24.8026 54.9919 38.8418 55.539 44.1153 47.6365Z" fill="`+this.backgroundColor+`"/>
			</svg>
		`;
		this.css = `
			#`+ this.target.id +` {
				display: `+this.display+`;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container {
				background: `+ this.backgroundColor +`;
				display: flex;
				text-decoration: none;
				cursor: pointer;
				line-height: 1 !important;
				font-family: `+this.fontFamily+`;
				overflow: hidden;
				border-radius: `+this.borderRadius+`;
				padding-right: 40px;
				border: `+this.borderSize+` solid `+this.borderColor+`;
			}
			#`+ this.target.id + ` .` + this.target.id +`-container * {
				line-height: 1 !important;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-logo-container,
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container {
				font-family: inherit;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-logo-container svg#co2ObserverLogo  {
				margin: 10px 15px 7px 10px !important;
				width: auto !important;
    			height: auto !important;
				visibility: visible !important;
				opacity: 1 !important;
				display: inline-block !important;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container {
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				padding: 10px 0;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-grade,
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-percent,
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-co2,
			#`+ this.target.id +` .`+ this.target.id +`-container:hover .`+ this.target.id +`-text-container .`+ this.target.id +`-text-grade,
			#`+ this.target.id +` .`+ this.target.id +`-container:hover .`+ this.target.id +`-text-container .`+ this.target.id +`-text-percent,
			#`+ this.target.id +` .`+ this.target.id +`-container:hover .`+ this.target.id +`-text-container .`+ this.target.id +`-text-co2  {
				display: block;
				font-family: inherit;
				margin: 0 !important;
				padding: 0 !important;
				color: `+ this.textColor +`;
				text-decoration: none;
				border: 0;
				text-align: left;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-grade,
			#`+ this.target.id +` .`+ this.target.id +`-container:hover .`+ this.target.id +`-text-container .`+ this.target.id +`-text-grade {
				color: `+ this.logoColor +`;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-grade {
				font-size: 30px;
				font-weight: bold;
			}
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-percent,
			#`+ this.target.id +` .`+ this.target.id +`-container .`+ this.target.id +`-text-container .`+ this.target.id +`-text-co2 {
				font-size: 14px;
				font-weight: normal;
			}
		`;
	}


	// *****************
	// Decipher key
	// *****************
	decipher(salt, encoded) {
		const textToChars = text => text.split('').map(c => c.charCodeAt(0));
		const applySaltToChar = code => textToChars(salt).reduce((a, b) => a ^ b, code);
		
		return encoded.match(/.{1,2}/g)
			.map(hex => parseInt(hex, 16))
			.map(applySaltToChar)
			.map(charCode => String.fromCharCode(charCode))
			.join('');
	}
	
	// *****************
	// Set Default Styles
	// *****************
	styles() {
		const style = document.createElement('style');
		style.innerHTML = this.css;
		this.target.appendChild(style);
	}
	
	// *****************
	// Create Badge Element
	// *****************
	createBadge() {

		const data = this.decipher(this.salt, this.key).split(",");
		
		const badgeContainer = document.createElement("a");
		badgeContainer.classList.add(this.target.id +'-container');
		badgeContainer.setAttribute("type","button");
		badgeContainer.setAttribute("role","button");
		badgeContainer.setAttribute("typeindex", "0");
		badgeContainer.setAttribute("title","Visit "+data[0]);
		badgeContainer.setAttribute("href",data[0]);
		
		const badgeLogoContainer = document.createElement("div");
		badgeLogoContainer.classList.add(this.target.id +'-logo-container');
		badgeLogoContainer.innerHTML = this.logo;

		const badgeTextContainer = document.createElement("div");
		badgeTextContainer.classList.add(this.target.id +'-text-container');

		const badgeTextGrade = document.createElement("span");
		badgeTextGrade.classList.add(this.target.id +'-text-grade');
		badgeTextGrade.innerHTML = data[1];

		const badgeTextPercent = document.createElement("span");
		badgeTextPercent.classList.add(this.target.id +'-text-percent');
		badgeTextPercent.innerHTML = data[3];

		const badgeTextCo2 = document.createElement("span");
		badgeTextCo2.classList.add(this.target.id +'-text-co2');
		badgeTextCo2.innerHTML = data[2];

		badgeTextContainer.appendChild(badgeTextGrade);
		badgeTextContainer.appendChild(badgeTextPercent);
		badgeTextContainer.appendChild(badgeTextCo2);
        
		badgeContainer.appendChild(badgeLogoContainer);
		badgeContainer.appendChild(badgeTextContainer);
		
		this.target.appendChild(badgeContainer);
	
	}

	
	// *****************
	// Initialize Badge
	// *****************
	init() {
		this.styles();
		this.createBadge();
	}
	
}

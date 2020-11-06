'use strict';

const Copy = () => {
	let copyTextareaBtn = document.querySelectorAll('.copy');

	let closure_ = (ev) => {
		let hex = ev.target.innerText;

		navigator.clipboard.writeText(hex).then(function() {
  			console.log('Async: Copying to clipboard was successful!');

			let copied = document.querySelector('#copied')
			copied.classList.add('is--active');

			setTimeout(() => {
				copied.classList.remove('is--active');
			}, 1500)


		}, function(err) {
  			console.error('Async: Could not copy text: ', err);
		});
	}

	copyTextareaBtn.forEach( el => el.addEventListener('click', closure_, false));
}

Copy();


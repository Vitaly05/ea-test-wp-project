export default function horizontalScroll (parentElement) {
	if (!$.fn.hScroll) {
		// horizontal scroll
		$.fn.hScroll = function (amount) {
			const $target = $(this);
			amount = amount || 120;

			function horizontalScroll (event) {
				event.preventDefault();

				const originalEvent = event.originalEvent;
				const direction = originalEvent.detail ? originalEvent.detail * -amount : originalEvent.wheelDelta;
				let position = $target.scrollLeft();

				position += direction > 0 ? -amount : amount;

				$target.scrollLeft(position);
			}

			$target.off("DOMMouseScroll mousewheel");

			if($target[0].scrollWidth > $target[0].clientWidth) {
				$target.on("DOMMouseScroll mousewheel", horizontalScroll);
			}
		};
	}

	if (parentElement) {
		$(parentElement).find('.js-horizontal-scroll').each(function () {
			$(this).hScroll(20);
		});
	}
}

export function verticalScroll (parentElement) {
	if (!$.fn.vScroll) {
		// vertical scroll
		$.fn.vScroll = function (amount) {
			const $target = $(this);
			amount = amount || 120;

			function verticalScroll (event) {
				event.preventDefault();

				const originalEvent = event.originalEvent;
				const direction = originalEvent.detail ? originalEvent.detail * -amount : originalEvent.wheelDelta;
				let position = $target.scrollTop();

				position += direction > 0 ? -amount : amount;

				$target.scrollTop(position);
			}

			$target.off("DOMMouseScroll mousewheel");

			// if($target[0].scrollHeight > $target[0].clientHeight) {
				$target.on("DOMMouseScroll mousewheel", verticalScroll);
			// }
		};
	}

	if (parentElement) {
		$(parentElement).find('.js-vertical-scroll').each(function () {
			$(this).vScroll(20);
		});
	}
}

export function verticalCurrentElScroll (element) {
	if (!$.fn.vScroll) {
		// vertical scroll
		$.fn.vScroll = function (amount) {
			const $target = $(this);
			amount = amount || 120;

			function verticalScroll (event) {
				event.preventDefault();

				const originalEvent = event.originalEvent;
				const direction = originalEvent.detail ? originalEvent.detail * -amount : originalEvent.wheelDelta;
				let position = $target.scrollTop();

				position += direction > 0 ? -amount : amount;

				$target.scrollTop(position);
			}

			$target.off("DOMMouseScroll mousewheel");

			// if($target[0].scrollHeight > $target[0].clientHeight) {
				$target.on("DOMMouseScroll mousewheel", verticalScroll);
			// }
		};
	}

	if (element) {
    $(element).vScroll(20);
	}
}
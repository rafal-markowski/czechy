import $ from 'jquery';

$(() => {
    const setText = (el, el2) => {
        el.text(el2.val());
    }

    const $rV = [$('#r1-value'), $('#r2-value')];
    const $r = [$('#r1'), $('#r2')];

    for(let i = 0, x = $rV.length; i < x; i++) {
        setText($rV[i], $r[i]);

        $r[i].on('input', () => {
            setText($rV[i], $r[i]);
        });
    }
});
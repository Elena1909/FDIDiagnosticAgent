var ccc = 0;
var cc = 0;
var score = 0;
var temp = 0;
var task = 1;
var t = 1;
var delay = 60000;
var push_a = false;
var push_b = false;
var push_c = false;
var push_d = false;
var st = false;
var dow = false;
var hand = new Array(7);
var deck = new Array(295);
var ANSWERS = new Array(196);
var KEY = new Array(196);
var TIMES = new Array(50);
var THETIMES = new Array(50);
var PROCESS = new Array(50);
for (i = 1; i < 50; i++) {
	THETIMES[i] = new Array();
	PROCESS[i] = new Array();
}
var ct = 0;
var ct3 = 0;
var ttt = "";
var nmax = 4 * 49;
for (i = 1; i < 295; i += 6) {
	deck[i] = new Pic("n", t);
	deck[i + 1] = new Pic(t, "");
	deck[i + 2] = new Pic(t, "a");
	deck[i + 3] = new Pic(t, "b");
	deck[i + 4] = new Pic(t, "c");
	deck[i + 5] = new Pic(t, "d");
	t++;
}
function Start() {
	if (st == false) {
		st = true;
		ident = window.setTimeout("Time9()", delay);
		st = true;
		window.document.images[2 - 2].src = "Pic/Test/N10.GIF";
		for (i = 1; i < 7; i++) {
			hand[i] = deck[i];
			window.document.images[i].src = hand[i].fname();
		}
	}
	for (i = 0; i < nmax; i++) {
		KEY[i] = 0;
	}

	for (i = 0; i < 50; i++) {
		TIMES[i] = 0;
		THETIMES[i] = [];
		PROCESS[i] = [];
	}
}
function fname() {
	fn = this.num + this.suit + ".gif";
	if (this.num <= 14) {
		fn = fn.toUpperCase();
	}
	return "Pic/Test/" + fn;
}
function Pic(num, suit) {
	this.num = num;
	this.suit = suit;
	this.fname = fname;
}
function Next() {
	if (st == true) {
		for (i = 1; i < 5; i++) {
			window.document.images[i + 4 - 2].border = '0';
		}
		if (push_a) KEY[(task - 1) * 4 + 0] = 1;
		if (push_b) KEY[(task - 1) * 4 + 1] = 1;
		if (push_c) KEY[(task - 1) * 4 + 2] = 1;
		if (push_d) KEY[(task - 1) * 4 + 3] = 1;
		TIMES[(task - 1)] = ct / 10;
		THETIMES[(task - 1)].push(ct3 / 10);
		PROCESS[(task - 1)].push(5);
		ct3 = 0;
		push_a = false;
		push_b = false;
		push_c = false;
		push_d = false;
		temp = 0;
		count();
		if (task < 49) task++;
		else {
			alert(locale[0]);
			End();
		}
		var curpic = (6 * task - 5);
		for (i = 1; i < 7; i++) {
			hand[i] = deck[curpic++];
			window.document.images[i].src = hand[i].fname();
		}
	}
}
function Count_a() {
	if (st == true) {
		if (push_a == false) {
			window.document.images[5 - 2].border = '2';
			push_a = true;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(1);
		}
		else {
			window.document.images[5 - 2].border = '0';
			push_a = false;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(-1);
		}
	}
}
function Count_b() {
	if (st == true) {
		if (push_b == false) {
			window.document.images[6 - 2].border = '2';
			push_b = true;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(2);
		}
		else {
			window.document.images[6 - 2].border = '0';
			push_b = false;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(-2);
		}
	}
}
function Count_c() {
	if (st == true) {
		if (push_c == false) {
			window.document.images[7 - 2].border = '2';
			push_c = true;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(3);
		}
		else {
			window.document.images[7 - 2].border = '0';
			push_c = false;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(-3);
		}
	}
}
function Count_d() {
	if (st == true) {
		if (push_d == false) {
			window.document.images[8 - 2].border = '2';
			push_d = true;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(4);
		}
		else {
			window.document.images[8 - 2].border = '0';
			push_d = false;
			THETIMES[(task - 1)].push(ct3 / 10);
			PROCESS[(task - 1)].push(-4);
		}
	}
}
function Time9() {
	window.document.images[2 - 2].src = "Pic/Test/N9.gif";
	ident = window.setTimeout("Time8()", delay);
}
function Time8() {
	window.document.images[2 - 2].src = "Pic/Test/N8.GIF";
	ident = window.setTimeout("Time7()", delay);
}
function Time7() {
	window.document.images[2 - 2].src = "Pic/Test/N7.GIF";
	ident = window.setTimeout("Time6()", delay);
}
function Time6() {
	window.document.images[2 - 2].src = "Pic/Test/N6.GIF";
	ident = window.setTimeout("Time5()", delay);
}
function Time5() {
	window.document.images[2 - 2].src = "Pic/Test/N5.GIF";
	ident = window.setTimeout("Time4()", delay);
}
function Time4() {
	window.document.images[2 - 2].src = "Pic/Test/N4.GIF";
	ident = window.setTimeout("Time3()", delay);
}
function Time3() {
	window.document.images[2 - 2].src = "Pic/Test/N3.GIF";
	ident = window.setTimeout("Time2()", delay);
}
function Time2() {
	window.document.images[2 - 2].src = "Pic/Test/N2.GIF";
	ident = window.setTimeout("Time1()", delay);
}
function Time1() {
	window.document.images[2 - 2].src = "Pic/Test/N1.GIF";
	ident = window.setTimeout("Time0()", delay);
}
function Time0() {
	window.document.images[2 - 2].src = "Pic/Test/ZERO.GIF";
	count();
	score = cc;
	alert(locale[2]);
	End();
}
function End() {
	count();
	score = cc;
	time = ct / 10;
	window.location.href = "_pzres.php?met=1&task=" + task + "&keys=" + KEY.toString() + "&times=" + TIMES.toString() + "&thetimes=" + JSON.stringify(THETIMES) + "&process=" + JSON.stringify(PROCESS) + "&time=" + time; //полезависимый
}
function Exit() {
	if (confirm(locale[1])) {
		window.location.href = "index.php"; //полезависимый
	}
}
function count() {
	cc = 0;
}

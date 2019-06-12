function calage() {
    let a = document.getElementById("fullname").value;
    let b = document.getElementById("fullname1").value;
    let check = true;
    if (!a) {

        alert("Mời bạn nhập chuỗi 1!");
        check = false;
    }

    if (!b) {
        alert("Mời bạn nhập chuỗi 2!");
        check = false;
    }
    if (check) {
        if (a.length > b.length)
            alert("khoảng cách giữa hai đoạn văn theo 1:  " + a.length + " kí tự");
        else
            alert("Khoảng cách giữa hai đoạn văn theo 2:  " + b.length);

    }
}
const deleteAndEarn = (nums) => {
    if (!nums.length) {
        return 0;
    }

    let maxPossible = 10000;

    let points = Array.from(Array(maxPossible + 1)).map(x => 0);
    for (let i = 0; i < nums.length; i++) {
        points[nums[i]] += nums[i];
    }

    let F = Array.from(Array(maxPossible + 1)).map((x, i) => points[i]);
    for (let i = 2; i <= maxPossible; i++) {
        F[i] = Math.max(F[i - 1], F[i - 2] + points[i]);
    }

    return F[maxPossible];
};
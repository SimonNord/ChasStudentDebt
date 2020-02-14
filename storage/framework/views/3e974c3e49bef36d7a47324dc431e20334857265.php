    <?php $__env->startSection('content'); ?>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <h1>Köp något att dricka vettja!</h1>
                </div>

                <form id="orderForm">
                    <select name="studentClass" id="studentClass" type="text" required>
                        <option value="" disabled selected hidden>-- Välj Klass --</option>

                        <option value="FWD18">FWD18</option>
                        <option value="FWD19">FWD19</option>
                        <option value="IK19">IK19</option>

                    </select>
                    <select name="studentName" id="studentName" type="text" required disabled>

                        <option value="" disabled selected hidden>-- Välj Student --</option>


                            <option value="studentId">Student 1 FWD19</option>
                            <option value="studentId">Student 2 FWD19</option>
                            <option value="studentId">Student 3 FWD19</option>

                            <option value="studentId">Student 1</option>
                            <option value="studentId">Student 2</option>
                            <option value="studentId">Student 3</option>
                            

                    </select>
                    <table border="1px"><br>
                        <thead>Välj dryck</thead>
                        <tr>
                            <td>Dryck</td><td>Pris</td><td>Antal</td>
                        </tr>
                        <tr>
                            <td>Öl</td><td>10</td><td><button type="button" id="subtBeer">-</button><input type="number" id="beerQuantity" placeholder="0" value="0" min="0" max="10"><button type="button" id="addBeer">+</button></td>
                        </tr>
                        <tr>
                            <td>Vin</td><td>10</td><td><button type="button" id="subtWine">-</button><input type="number" id="wineQuantity" placeholder="0" value="0" min="0" max="10"><button type="button" id="addWine">+</button></td>
                        </tr>
                        <tr>
                            <td>Läsk</td><td>5</td><td><button type="button" id="subtSoda">-</button><input type="number" id="sodaQuantity" placeholder="0" value="0" min="0" max="10"><button type="button" id="addSoda">+</button></td>
                        </tr>
                    </table>
                    <button type="submit">Köp dryck</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till Meny</button>
                </form>





            </div>
        </div>

<script>
    let studentClassSelect = document.getElementById("studentClass");
        studentClassSelect.onchange = function () {
        document.getElementById("studentName").removeAttribute("disabled");
        return studentClassSelect.value;
    };

    //    Add and subtract from Beer order
    let beerQuantity = document.getElementById('beerQuantity');
    let addBeer = document.getElementById('addBeer');
    let subtBeer = document.getElementById('subtBeer');

    addBeer.addEventListener("click", function () {
        beerQuantity.value++;
    });

    subtBeer.addEventListener("click", function () {
        if (beerQuantity.value > 0) {
            beerQuantity.value--;
        }
    });

    //    Add and subtract from Wine order
    let wineQuantity = document.getElementById('wineQuantity');
    let addWine = document.getElementById('addWine');
    let subtWine = document.getElementById('subtWine');

    addWine.addEventListener("click", function () {
        wineQuantity.value++;
    });

    subtWine.addEventListener("click", function () {
        if (wineQuantity.value > 0) {
            wineQuantity.value--;
        }
    });

    //    Add and subtract from Soda order
    let sodaQuantity = document.getElementById('sodaQuantity');
    let addSoda = document.getElementById('addSoda');
    let subtSoda = document.getElementById('subtSoda');

    addSoda.addEventListener("click", function () {
        sodaQuantity.value++;
    });

    subtSoda.addEventListener("click", function () {
        if (sodaQuantity.value > 0) {
            sodaQuantity.value--;
        }
    });



</script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1dylan\Desktop\sites\ChasStudentDebt\resources\views/order.blade.php ENDPATH**/ ?>
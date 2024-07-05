
  function calculateTotalPrice() {
    const rentalDays = document.getElementById('rental_days').value;
    const totalPrice = document.getElementById('total_price');
    let total = 0;

    const checkboxes = document.getElementsByName('rented_items[]');
    for (let i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        switch (checkboxes[i].value) {
          case 'Pembersih wajah':
            total += 300000;
            break;
          case 'Exfoliator':
            total += 500000;
            break;
          case 'Toner':
            total += 200000;
            break;
          case 'Serum':
            total += 150000;
            break;
          case 'Sunscreen':
            total += 100000;
            break;
          case 'Spot Treatment + Eye Cream':
            total += 1000000;
            break;
        }
      }
    }

    total *= rentalDays;
    totalPrice.value = `Rp ${total.toLocaleString('id-ID')}`;
  }

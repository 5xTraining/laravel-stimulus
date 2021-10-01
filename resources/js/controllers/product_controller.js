import { Controller } from "@hotwired/stimulus"

export default class extends Controller {
    static targets = ["quantity", "totalPrice"]
    static values = {
        price: Number,
    }

    plus(e) {
        e.preventDefault()
        this.quantityTarget.value = Number(this.quantityTarget.value) + 1
        this.calc()
    }

    minus(e) {
        e.preventDefault()
        if (this.quantityTarget.value > 1) {
            this.quantityTarget.value = Number(this.quantityTarget.value) - 1
            this.calc()
        }
    }

    calc() {
        this.totalPriceTarget.textContent =
            Number(this.quantityTarget.value) * this.priceValue
    }
}

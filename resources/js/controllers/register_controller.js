import { Controller } from "@hotwired/stimulus"

export default class extends Controller {
    static targets = ["username", "modal"]

    submitData(e) {
        e.preventDefault()
        if (this.usernameTarget.value === "") {
            this.modalTarget.classList.remove("hidden")
            this.modalTarget.classList.add("flex")
        }
    }
}

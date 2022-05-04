import { getMaxListeners } from "process"

describe('My First Test', () => {
    it('Visits the Kitchen Sink', () => {
        cy.visit("https://guarded-coast-53681.herokuapp.com/")

        cy.contains('Surfboard').click()

        //Should be on a new URL which includes 'surfboard'
        cy.url().should('include', '/surfboard')
        cy.contains('Add to cart').click()
        cy.contains('Cart').click()
        cy.url().should('include', '/cart')
        cy.contains('Checkout').click()
        cy.url().should('include', '/login')
        cy.contains('Need to register').click()
        cy.url().should('include', '/register')
        cy.get('#name').type("testestestes12")
        cy.get('#email').type("test@gmail.com")
        cy.get('#password').type("password")
        cy.get('#password_confirmation').type("password")
        cy.contains('Register').click()
        cy.contains('The email has already been taken')
        cy.contains("Already registered?").click()
        cy.get('#email').type("test@gmail.com")
        cy.get('#password').type("password")
        cy.contains('Log in').click()
        cy.contains('testestestes12')
        cy.contains('Cart').click()
        cy.contains('Checkout').click()
        cy.url().should('include', '/checkout')
        cy.contains('Pay')


    })
})

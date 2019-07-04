User
uuid
first_name
last_name
screen_name
email
email_verified_at
password
remember_token

Role
name

ShippingAddress
uuid
name
country
street_address
unit_number
city
state
postal_code

role_user

shipping_address_user

password_resets
email
token

Profile
uuid
user_id
facebook
instagram
twitter
snapchat
thcfarmer
rollitup
420mag
leafly
strainly

Manufacturer
uuid
name
country
street_address
unit_number
city
state
postal_code

Vendor
uuid
user_id
name
country
street_address
unit_number
city
state
postal_code

Product
uuid
manufacturer_id
vendor_id
name
description
height
width
depth
price

Subscription
uuid
user_id
shipping_address_id
frequency
active

product_subscription

Cart
uuid
user_id

cart_product
product_id
cart_id
qty

PaymentMethodType
name
type
receiving_account
active

payment_method_type_user

Invoice
user_id  //required
subscription_id // nullable
subtotal
tax
shipping
discount
total

invoice_product
qty

Coupon
percentage
value
code
expires

coupon_user

Payment
payment_method_type_user_id
amount

invoice_payment

Order
uuid
invoice_id

Shipment
uuid
shipping_method_id
shipped_on_date
received_on_date

order_shipment

Image
uuid
imageable_id
imageable_type
large
medium
small
square
original


from django.conf.urls.defaults import patterns,url,include
from report import views
from registrations import views as register
from input import views as input_view
urlpatterns = patterns('', 
	url(r'main/$',views.main,name='main_page'),
<<<<<<< HEAD
	url(r'donation/',input_view.donation_form, name = 'donate'),
	url(r'physician_login/',register.register, name = 'register'),
	url(r'curator_login/', register.register, name = 'register'),
	url(r'patient_login/', register.register, name = 'register'),
=======
	url(r'physician_login/$',views.physician_login,name='physician'),
	url(r'patient_login/$',views.patient_login,name='patient'),
	url(r'curator_login/$',views.curator_login,name='patient'),
>>>>>>> 28226f3b0bb6a0d7d2f7e47decf6a0a0140a064c
	)


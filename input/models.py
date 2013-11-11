from django.db import models

# Create your models here.
class History(models.Model):
    MALE = 'M'
    FEMALE = 'F'
    SEX_CHOICES = (
        (FEMALE, 'Female'),
        (MALE, 'Male'),
    )

    YES = 'Y'
    NO = 'N'
    NOT_DETERMINED = 'Not Determined'
    RECURRENCE_CHOICES = (
        (YES, 'Yes'),
        (NO, 'No'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    PREMENOPAUSAL = 'PREMENOPAUSAL'
    PERIMENOPAUSAL = 'PERIMENOPAUSAL'
    POSTMENOPAUSAL = 'POSTMENOPAUSAL'
    MENOPAUSAL_CHOICES = (
        (PREMENOPAUSAL, 'Premenopausal'),
        (PERIMENOPAUSAL, 'Perimenopausal'),
        (POSTMENOPAUSAL, 'Postmenopausal'),
    )

    DUCTAL_CARCINOMA_IN_SITU = 'Ductal Carcinoma In Situ'
    DUCTAL_CARCINOMA =  'Ductal Carcinoma'
    LOBULAR_CARCINOMA = 'Lobular Carcinoma'
    TISSUE_CHOICES = (
        (DUCTAL_CARCINOMA, 'Ductal Carcinoma'),
        (DUCTAL_CARCINOMA_IN_SITU, 'Ductal Carcinoma In Situ'),
        (LOBULAR_CARCINOMA, 'Lobular Carcinoma'),
    )

    IN_SITU = 'In Situ'
    S_I = 'Stage I'
    S_II = 'Stage II'
    S_III = 'Stage III'
    S_IV = 'Stage IV'
    STAGE_CHOICES = (
        (IN_SITU, 'In Situ'),
        (S_I, 'Stage I'),
        (S_II, 'Stage II'),
        (S_III, 'Stage III'),
        (S_IV, 'Stage IV'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    INFLAMMATORY_CHOICES = (
        (YES, 'Yes'),
        (NO, 'No'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    MESTASTATIC_CHOICES = (
        (YES, 'Yes'),
        (NO, 'No'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    ER_CHOICES = (
        (YES, 'Yes'),
        (NO, 'No'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    PR_CHOICES = (
        (YES, 'Yes'),
        (NO, 'No'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    HER2_CHOICES = (
        (YES, 'Yes'),
        (NO, 'No'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    SMALL = 'Less than 2.0cm'
    MEDIUM = '2.1cm-5.0cm'
    LARGE = 'Larger than 5.0cm'
    SIZE_CHOICES = (
        (SMALL,'Less than 2.0cm'),
        (MEDIUM, '2.1cm-5.0cm'),
        (LARGE, 'Larger than 5.0cm'),
        (NOT_DETERMINED, 'Not Determined'),
    )

    HIGH = 'High'
    LOW = 'Low'
    NOT_TESTED = 'Not tested'
    MAMMAPRINT_SCORE_CHOICES=(
        (HIGH, 'High'),
        (LOW, 'Low'),
        (NOT_TESTED, 'Not tested')
    )

    LOW_DX = '17 or smaller'
    MEDIUM_DX = '18-30'
    HIGH_DX = '31 or larger'
    DX_CHOICES = (
        (LOW_DX, '17 or smaller'),
        (MEDIUM_DX, '18-30'),
        (HIGH_DX, '31 or larger'),
    )

    Sex= models.CharField(max_length=2, choices = SEX_CHOICES, defaults= MALE)
    Recurrence=models.CharField(max_length=1, choices = RECURRENCE_CHOICES, defaults= NO)
    Menopausal_status= models.CharField(max_length=29, choices= MENOPAUSAL_CHOICES, defaults = PREMENOPAUSAL)
    Tissue= models.CharField(max_length=30, choices = TISSUE_CHOICES, defaults = DUCTAL_CARCINOMA_IN_SITU)
    Stage= models.CharField(max_length=34, choices = STAGE_CHOICES, defaults = IN_SITU)
    Inflammatory_status= models.CharField(max_length=3, choices = INFLAMMATORY_CHOICES, defaults = NO)
    Mestastatic_status= models.CharField(max_length=3, choices = MENOPAUSAL_CHOICES, defaults = NO)
    ER = models.CharField(max_length=1, choices = ER_CHOICES, defaults = NO)
    PR = models.CharField(max_length=1, choices = PR_CHOICES, defaults = NO)
    HER2 = models.CharField(max_length=1, choices = HER2_CHOICES, defaults = NO)
    Tumor_size = models.CharField(max_length=23, choices = SIZE_CHOICES, defaults = SMALL)
    Mammaprint_score= models.CharField(max_length=10, choices = MAMMAPRINT_SCORE_CHOICES, defaults = LOW)
    DX_Oncotype_score= models.CharField(max_length=10, choices = DX_CHOICES, defaults = LOW_DX)
    Treatment= models.CharField(max_length=29)
    Recent_status= models.CharField(max_length=1032)
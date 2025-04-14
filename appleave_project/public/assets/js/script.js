        function showLeaveFields() {
            document.querySelectorAll('.leave-type-fields').forEach(field => {
                field.style.display = 'none';
            });
            
            const leaveType = document.getElementById('leaveType').value;
            
            if (leaveType === 'sick') {
                document.getElementById('sickLeaveFields').style.display = 'block';
            } else if (leaveType === 'vacation') {
                document.getElementById('vacationLeaveFields').style.display = 'block';
            } else if (leaveType === 'personal') {
                document.getElementById('personalLeaveFields').style.display = 'block';
            } else if (leaveType === 'maternity') {
                document.getElementById('maternityLeaveFields').style.display = 'block';
            } else if (leaveType === 'special') {
                document.getElementById('specialLeaveBenefitFields').style.display = 'block';
            } else if (leaveType === 'study') {
                document.getElementById('studyLeaveFields').style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('leaveDate').value = today;
        });

        document.getElementById('doctorNote').addEventListener('change', function() {
            const attachmentDiv = document.getElementById('doctorNoteAttachment');
            if (this.value === 'yes') {
                attachmentDiv.style.display = 'block';
            } else {
                attachmentDiv.style.display = 'none';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const singleDayRadio = document.getElementById('singleDay');
            const multipleDaysRadio = document.getElementById('multipleDays');
            const singleDaySection = document.getElementById('singleDaySection');
            const multipleDaysSection = document.getElementById('multipleDaysSection');

            singleDayRadio.addEventListener('change', function() {
                if (this.checked) {
                    singleDaySection.style.display = 'block';
                    multipleDaysSection.style.display = 'none';
                }
            });

            multipleDaysRadio.addEventListener('change', function() {
                if (this.checked) {
                    singleDaySection.style.display = 'none';
                    multipleDaysSection.style.display = 'block';
                }
            });
        });
    
    document.addEventListener('DOMContentLoaded', function() {
    const today = new Date();
    const minDate = new Date();
    minDate.setDate(today.getDate() + 5);
    const minDateString = minDate.toISOString().split('T')[0];

    // Apply to all relevant date inputs
    document.getElementById('leaveDateSingle').min = minDateString;
    document.getElementById('leaveDateStart').min = minDateString;
});

document.addEventListener('DOMContentLoaded', function() {
    const leaveTypeDropdown = document.getElementById('leaveType');
    const personalLeaveDiv = document.getElementById('personalLeave');

    leaveTypeDropdown.addEventListener('change', function() {
        if (this.value === 'maternity') {
            personalLeaveDiv.style.display = 'none';  // Hide if Maternity/Paternity is selected
        } else {
            personalLeaveDiv.style.display = 'block'; // Show otherwise
        }
    });

    // Trigger on page load (in case 'maternity' is pre-selected)
    if (leaveTypeDropdown.value === 'maternity') {
        personalLeaveDiv.style.display = 'none';
    }
});
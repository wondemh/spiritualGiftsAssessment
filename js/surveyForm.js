function SurveyForm() {
	var _QUESTIONS = 
	[	
		{index: "1", inputId: "C6", question: "I like to speak out for God against unrighteousness"},
		{index: "2", inputId: "C7", question: "I like to make sure people are well fed and comfortable"},
		{index: "3", inputId: "C8", question: "I  prefer working behind the scenes without recognition"},
		{index: "4", inputId: "C9", question: "I am fascinated by the Word of God and love to dig deep into it"},
		{index: "5", inputId: "C10", question: "I like to empathize with people who are going through hardship"},
		{index: "6", inputId: "C11", question: "I am good at helping people learn things"},
		{index: "7", inputId: "C12", question: "I can tell the motivating spirit behind people’s words or actions?"},
		{index: "8", inputId: "C13", question: "I seem to have insight into what God is doing in people or situations"},
		{index: "9", inputId: "C14", question: "I like to give my time, ability and resources to others"},
		{index: "10", inputId: "C15", question: "I feel obligated to care for and meet the needs of other people"},
		{index: "11", inputId: "C16", question: "I seem to have insight into what God is doing even when others don’t"},
		{index: "12", inputId: "C17", question: "I get some of my Spiritual gifts from the spirit of my ancestors"},
		{index: "13", inputId: "C18", question: "God reveals His word to me in unusual ways"},
		{index: "14", inputId: "C19", question: "It is hard for me to say no to people"},
		{index: "15", inputId: "C20", question: "Sometimes God reveals to me things about a person without really knowing that person"},
		{index: "16", inputId: "C21", question: "I find myself praying a lot for sick people"},
		{index: "17", inputId: "C22", question: "I think I know the day and hour of the return of Jesus"},
		{index: "18", inputId: "C23", question: "I love to help disadvantaged people with daily needs and the Gospel"},
		{index: "19", inputId: "C24", question: "I am able to make people feel better just by taking with them"},
		{index: "20", inputId: "C25", question: "I have prayed for people and they got miraculously healed"},
		{index: "21", inputId: "C26", question: "I seem to always know just the right thing to say when people need it"},
		{index: "22", inputId: "C27", question: "My spiritual gift is not for the church"},
		{index: "23", inputId: "C28", question: "I can put myself in people’s place and feel their pain"},
		{index: "24", inputId: "C29", question: "I seem to be able to give divine guidance to people about their life"},
		{index: "25", inputId: "C30", question: "I forgive and restore with people easily"},
		{index: "26", inputId: "C31", question: "I think the Holy Spirit wants me to be a leader of a local congregation"},
		{index: "27", inputId: "C32", question: "I don’t believe I should forgive people who hurt me"},
		{index: "28", inputId: "C33", question: "I like to make people feel at home"},
		{index: "29", inputId: "C34", question: "My first answer to problems is always prayer"},
		{index: "30", inputId: "C35", question: "I like to see people enjoy themselves and have fun"},
		{index: "31", inputId: "C36", question: "I like to use my house, vehicle and belongings to make people happy"},
		{index: "32", inputId: "C37", question: "I believe spiritual gifts can be bought with money"},
		
		{index: "33", inputId: "C39", question: "God has given me in tongues special information to edify others"},
		{index: "34", inputId: "C40", question: "Despite evidence to the contrary I find it easy to trust God"},
		{index: "35", inputId: "C41", question: "I like to do Biblical research"},
		{index: "36", inputId: "C42", question: "I get upset when people say things cannot be done"},
		{index: "37", inputId: "C43", question: "I like to bring people to Jesus any way I can"},
		{index: "38", inputId: "C44", question: "Sometimes God directs me through strong feelings or even physical symptoms"},
		{index: "39", inputId: "C45", question: "I find myself looking for opportunities to give"},
		{index: "40", inputId: "C46", question: "I prefer to expose error rather than conceal it"},
		{index: "41", inputId: "C47", question: "I tend to see the needs of others"},
		{index: "42", inputId: "C48", question: "Reputable people seem to think I should be a missionary"},
		{index: "43", inputId: "C49", question: "I am good at attracting others to get involved in activities or causes"},
		{index: "44", inputId: "C50", question: "God shows me things about people and situations through the Scriptures"},
		{index: "45", inputId: "C51", question: "I tend to take responsibility for the direction or success of a project"},
		{index: "46", inputId: "C52", question: "I tend to see unmet needs in the church and work to get them met"},
		{index: "47", inputId: "C53", question: "I can sense the difference between sickness and demonic presence"},
		{index: "48", inputId: "C54", question: "I am able to make complex things simple to people."},
		{index: "49", inputId: "C55", question: "I prefer to be in a supportive rather than a leadership role"},
		{index: "50", inputId: "C56", question: "My Spiritual gifts are to advance and improve myself"},
		{index: "51", inputId: "C57", question: "I see assisting others as my duty towards God"},
		{index: "52", inputId: "C58", question: "When I speak in tongues God has used others to accurately interpret"},
		{index: "53", inputId: "C59", question: "I prefer to assist people rather than criticize them"},
		{index: "54", inputId: "C60", question: "Reputable people seem to think I should be an evangelist"},
		{index: "55", inputId: "C61", question: "I don’t believe salvation is by grace through faith"},
		{index: "56", inputId: "C62", question: "I have had answers to prayer that could not be explained naturally."},
		{index: "57", inputId: "C63", question: "I am a very orderly and well-organized person"},
		{index: "58", inputId: "C64", question: "I think the Holy Spirit wants me to serve under a pastor in a local congregation"},
		{index: "59", inputId: "C65", question: "I rather manage projects than people"},
		{index: "60", inputId: "C66", question: "Gifts of the Spirit come from heredity not from the spirit"},
		{index: "61", inputId: "C67", question: "I have no difficulty believing that God can do the impossible"},
		{index: "62", inputId: "C68", question: "I am good at clarifying a vision and mobilizing others toward action"},
		{index: "63", inputId: "C69", question: "I absolutely love mission trips"},
		{index: "64", inputId: "C70", question: "I am able to wait on God for an answer even  in situations that look hopeless"},
		{index: "65", inputId: "C71", question: "I can usually tell when people are telling the truth or not"},
		{index: "66", inputId: "C72", question: "In church, at home, and with my friends I tend to be like a cheer leader to people"},
		{index: "67", inputId: "C73", question: "I am easily moved to meet the physical needs of others"},
		{index: "68", inputId: "C74", question: "People see me as a shoulder to cry on"},
		{index: "69", inputId: "C75", question: "I got my spiritual gifts even before I got saved"},
		{index: "70", inputId: "C76", question: "When I see sick people I am deeply moved to help them"},
		
		{index: "71", inputId: "C78", question: "I am able to trust God even in difficult times"},
		{index: "72", inputId: "C79", question: "I am in or would like to be in a ministry helping sick people"},
		{index: "73", inputId: "C80", question: "I like to help people understand what is going on around them"},
		{index: "74", inputId: "C81", question: "My spiritul powers work best when the moon is full"},
		{index: "75", inputId: "C82", question: "I find myself ministering in unknown language without trying"},
		{index: "76", inputId: "C83", question: "I am convinced of truth even when it makes no sense"},
		{index: "77", inputId: "C84", question: "When I pray intensely in private I find myself speaking in tongues?"},
		{index: "78", inputId: "C85", question: "I cannot resist getting involved when people are hurting"},
		{index: "79", inputId: "C86", question: "I can sense the presence of an evil spirit or divine anointing on a believer"},
		{index: "80", inputId: "C87", question: "I have interpreted a foreign language I did not know before and did not know after"},
		{index: "81", inputId: "C88", question: "I tend to stand with people in time of difficulty without being asked"},
		{index: "82", inputId: "C89", question: "I feel close to God when interpreting a word given in tongues"},
		{index: "83", inputId: "C90", question: "I feel almost compelled to help people who lack leadership and direction"},
		{index: "84", inputId: "C91", question: "I am able to sense danger and like to warn people about it?"},
		{index: "85", inputId: "C92", question: "I prefer to reach the lost than ministering to believers"},
		{index: "86", inputId: "C93", question: "Reputable people seem to think I should be a pastor"},
		{index: "87", inputId: "C94", question: "My spiritual gifts come upon me through yoga or mental meditation"},
		{index: "88", inputId: "C95", question: "I feel the a burden to serve others in the church"},
		{index: "89", inputId: "C96", question: "I feel strong urges to interpret something said in another language"},
		{index: "90", inputId: "C97", question: "People tend to look to me to make decisions or take action"},
		{index: "91", inputId: "C98", question: "Pastors seem to think I should be a pastor"},
		{index: "92", inputId: "C99", question: "It is my nature to motivate others to become better"},
		{index: "93", inputId: "C100", question: "God has given me a clear understanding when someone was talking in tongues"},
		{index: "94", inputId: "C101", question: "I don’t think I could pastor believers I prefer working with lost people"},
		{index: "95", inputId: "C102", question: "I am good at planning and organizing events"},
		{index: "96", inputId: "C103", question: "I am fascinated by reaching people of different races, cultures and ethnicities"},
		{index: "97", inputId: "C104", question: "I get frustrated if things are disorganized or poorly planned"},
		{index: "98", inputId: "C105", question: "Sometimes God tells me things before they happen"},
		{index: "99", inputId: "C106", question: "I want to be a pastor I just want to serve others in a church office"}
		
	];
	
	var _formTemplate = null;
	
	$(document).ready(function() {
		_formTemplate = Handlebars.compile($('#surveyFormTemplate').html());
		$('#surveyQuestionsContainer').html(_formTemplate(_QUESTIONS));
	});
	
	this.clearSurveyForm = function() {
		$('input[type=radio]').prop('checked', false);
	};
	
	this.submitSurvey = function() {
		var inputNamesArray = new Array();
		var errorsFound = false;
		$(':radio').each(function(index, input) {
			inputNamesArray.push($(input).attr('name'));
		});
		
		$.each(inputNamesArray, function(index, value) {
			var input = $('input[name='+value+']:checked');
			if(input.length == 0) {
				$('#questionRow_'+value).addClass('danger');
				errorsFound = true;
			} else {
				$('#questionRow_'+value).removeClass('danger');
			}
		});
		
		if(errorsFound) {
			$('#surveyErrorsMsg').css('display', 'block');
			window.scrollTo(0, 0);
		} else {
			$('#surveyErrorsMsg').css('display', 'none');
			$('#surveyForm').submit();	
		}
	};
}
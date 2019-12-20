import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { HikePage } from './hike.page';

describe('HikePage', () => {
  let component: HikePage;
  let fixture: ComponentFixture<HikePage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HikePage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(HikePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

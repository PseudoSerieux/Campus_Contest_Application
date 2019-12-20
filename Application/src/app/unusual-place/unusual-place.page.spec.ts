import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { UnusualPlacePage } from './unusual-place.page';

describe('UnusualPlacePage', () => {
  let component: UnusualPlacePage;
  let fixture: ComponentFixture<UnusualPlacePage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UnusualPlacePage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(UnusualPlacePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
